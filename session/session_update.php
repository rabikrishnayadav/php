<?php
// We have to write each and every file in first line this syntax for start the session.
session_start(); 
// just open this file on browser then your session will start automatically.
// for update the session
$_SESSION['username'] = 'Rabi Krishna yadav'; // this will update the session with value 'Rabi Krishna yadav' and make sure session variable name is same as at the create time.
?>