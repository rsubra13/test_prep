<?php

/**
 * These tests should work regardless of $wgCapitalLinks
 * @group Database
 * @todo Split tests into providers and test methods
 */

class LocalFileTest extends MediaWikiTestCase {

	protected function setUp() {
		parent::setUp();

		$this->setMwGlobals( 'wgCapitalLinks', true );

		$info = array(
			'name' => 'test',
			'directory' => '/testdir',
			'url' => '/testurl',
			'hashLevels' => 2,
			'transformVia404' => false,
			'backend' => new FSFileBackend( array(
				'name' => 'local-backend',
				'lockManager' => 'fsLockManager',
				'containerPaths' => array(
					'cont1' => "/testdir/local-backend/tempimages/cont1",
					'cont2' => "/testdir/local-backend/tempimages/cont2"
				)
			) )
		);
		$this->repo_hl0 = new LocalRepo( array( 'hashLevels' => 0 ) + $info );
		$this->repo_hl2 = new LocalRepo( array( 'hashLevels' => 2 ) + $info );
		$this->repo_lc = new LocalRepo( array( 'initialCapital' => false ) + $info );
		$this->file_hl0 = $this->repo_hl0->newFile( 'test!' );
		$this->file_hl2 = $this->repo_hl2->newFile( 'test!' );
		$this->file_lc = $this->repo_lc->newFile( 'test!' );
	}

	/**
	 * @covers File::getHashPath
	 */
	public function testGetHashPath() {
		$this->assertEquals( '', $this->file_hl0->getHashPath() );
		$this->assertEquals( 'a/a2/', $this->file_hl2->getHashPath() );
		$this->assertEquals( 'c/c4/', $this->file_lc->getHashPath() );
	}

	/**
	 * @covers File::getRel
	 */
	public function testGetRel() {
		$this->assertEquals( 'Test!', $this->file_hl0->getRel() );
		$this->assertEquals( 'a/a2/Test!', $this->file_hl2->getRel() );
		$this->assertEquals( 'c/c4/test!', $this->file_lc->getRel() );
	}

	/**
	 * @covers File::getUrlRel
	 */
	public function testGetUrlRel() {
		$this->assertEquals( 'Test%21', $this->file_hl0->getUrlRel() );
		$this->assertEquals( 'a/a2/Test%21', $this->file_hl2->getUrlRel() );
		$this->assertEquals( 'c/c4/test%21', $this->file_lc->getUrlRel() );
	}

	/**
	 * @covers File::getArchivePath
	 */
	public function testGetArchivePath() {
		$this->assertEquals( 'mwstore://local-backend/test-public/archive', $this->file_hl0->getArchivePath() );
		$this->assertEquals( 'mwstore://local-backend/test-public/archive/a/a2', $this->file_hl2->getArchivePath() );
		$this->assertEquals( 'mwstore://local-backend/test-public/archive/!', $this->file_hl0->getArchivePath( '!' ) );
		$this->assertEquals( 'mwstore://local-backend/test-public/archive/a/a2/!', $this->file_hl2->getArchivePath( '!' ) );
	}

	/**
	 * @covers File::getThumbPath
	 */
	public function testGetThumbPath() {
		$this->assertEquals( 'mwstore://local-backend/test-thumb/Test!', $this->file_hl0->getThumbPath() );
		$this->assertEquals( 'mwstore://local-backend/test-thumb/a/a2/Test!', $this->file_hl2->getThumbPath() );
		$this->assertEquals( 'mwstore://local-backend/test-thumb/Test!/x', $this->file_hl0->getThumbPath( 'x' ) );
		$this->assertEquals( 'mwstore://local-backend/test-thumb/a/a2/Test!/x', $this->file_hl2->getThumbPath( 'x' ) );
	}

	/**
	 * @covers File::getArchiveUrl
	 */
	public function testGetArchiveUrl() {
		$this->assertEquals( '/testurl/archive', $this->file_hl0->getArchiveUrl() );
		$this->assertEquals( '/testurl/archive/a/a2', $this->file_hl2->getArchiveUrl() );
		$this->assertEquals( '/testurl/archive/%21', $this->file_hl0->getArchiveUrl( '!' ) );
		$this->assertEquals( '/testurl/archive/a/a2/%21', $this->file_hl2->getArchiveUrl( '!' ) );
	}

	/**
	 * @covers File::getThumbUrl
	 */
	public function testGetThumbUrl() {
		$this->assertEquals( '/testurl/thumb/Test%21', $this->file_hl0->getThumbUrl() );
		$this->assertEquals( '/testurl/thumb/a/a2/Test%21', $this->file_hl2->getThumbUrl() );
		$this->assertEquals( '/testurl/thumb/Test%21/x', $this->file_hl0->getThumbUrl( 'x' ) );
		$this->assertEquals( '/testurl/thumb/a/a2/Test%21/x', $this->file_hl2->getThumbUrl( 'x' ) );
	}

	/**
	 * @covers File::getArchiveVirtualUrl
	 */
	public function testGetArchiveVirtualUrl() {
		$this->assertEquals( 'mwrepo://test/public/archive', $this->file_hl0->getArchiveVirtualUrl() );
		$this->assertEquals( 'mwrepo://test/public/archive/a/a2', $this->file_hl2->getArchiveVirtualUrl() );
		$this->assertEquals( 'mwrepo://test/public/archive/%21', $this->file_hl0->getArchiveVirtualUrl( '!' ) );
		$this->assertEquals( 'mwrepo://test/public/archive/a/a2/%21', $this->file_hl2->getArchiveVirtualUrl( '!' ) );
	}

	/**
	 * @covers File::getThumbVirtualUrl
	 */
	public function testGetThumbVirtualUrl() {
		$this->assertEquals( 'mwrepo://test/thumb/Test%21', $this->file_hl0->getThumbVirtualUrl() );
		$this->assertEquals( 'mwrepo://test/thumb/a/a2/Test%21', $this->file_hl2->getThumbVirtualUrl() );
		$this->assertEquals( 'mwrepo://test/thumb/Test%21/%21', $this->file_hl0->getThumbVirtualUrl( '!' ) );
		$this->assertEquals( 'mwrepo://test/thumb/a/a2/Test%21/%21', $this->file_hl2->getThumbVirtualUrl( '!' ) );
	}

	/**
	 * @covers File::getUrl
	 */
	public function testGetUrl() {
		$this->assertEquals( '/testurl/Test%21', $this->file_hl0->getUrl() );
		$this->assertEquals( '/testurl/a/a2/Test%21', $this->file_hl2->getUrl() );
	}

	/**
	 * @covers ::wfLocalFile
	 */
	public function testWfLocalFile() {
		$file = wfLocalFile( "File:Some_file_that_probably_doesn't exist.png" );
		$this->assertThat( $file, $this->isInstanceOf( 'LocalFile' ), 'wfLocalFile() returns LocalFile for valid Titles' );
	}
}
