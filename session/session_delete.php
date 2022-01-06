<?php
// We have to write each and every file in first line this syntax for start the session.
session_start(); 
// just open this file on browser then your session will start automatically.
// for delete the session one by one variable
unset($_SESSION['username']); // this will delete only username variable
unset($_SESSION['age']); // this will delete only age variable
// for delete the complete session which is created and updated.
session_destroy(); // this will delete all the session which is created
?>