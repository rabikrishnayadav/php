<?php
// We have to write each and every file in first line this syntax for start the session.
session_start(); // just open this file on browser then your session will start automatically.
// for create the session
$_SESSION['username'] = 'Rabi Kumar yadav'; // this will create session with variable name 'username' and variable value 'Rabi Kumar yadav'
$_SESSION['age'] = 25;
?>