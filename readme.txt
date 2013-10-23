the software used is webtester5
original website download
http://sourceforge.net/projects/webtesteronline/
the instalation steps involved are :-
1.install a xampp server or a any other server.  
2.copy the webtester5.zip into your server(or localhost) web directory
3.un-zip the file 
4.open your web browser and enter the link to the webtester5's install.php file (example http://localhost/webtester5/install.php)
5.enter the database details such as databasename used, database location, database username etc.
6.it is advised to create a database as some systems would not allow the webtester5 to create the database
7.press go the tables will be created and added to the database.
8.you will be taken to the admin module where you can create test,subjects and view all database info
9.open the webtester5/userlogin.php file to login and take a test

changes made to the system:-

1.bugs fixed (several of the syntax did not work on the latest php)
2.added register feature during the login page
3.edited the register.php to get only those values that are added to the database
4.the old site took the name while taking the test . but the new one will take the name from the user's database .

note:- there might still be some bugs like when you try to quit a test etc . we are still working on this.
