<?php    function getQuestions($testID)    {        if ($testID != "") {			$query = "select ID, QuestionText from Questions WHERE TestID=" . $testID . " order by sortOrder ASC, ID ASC";		} else {			$query = 'select ID, QuestionText from Questions order by sortOrder ASC, ID ASC';		}        $result = mysql_query($query);        $questions = array();        while ($row = mysql_fetch_object($result)) {            $questions[$row->ID] = $row->QuestionText;        }         return $questions;    }?><?php    function processQuestionsOrder($key)    {        if (!isset($_POST[$key]) || !is_array($_POST[$key]))            return;         $questions = getQuestions();        $queries = array();        $ranking = 1;         foreach ($_POST[$key] as $question_id) {            if (!array_key_exists($question_id, $questions))                continue;             $query = sprintf('update Questions set sortOrder = %d where ID = %d',                             $ranking,                             $question_id);             mysql_query($query);            $ranking++;        }    }?>