<?php 
session_start(); //Initializes or resumes a session
session_unset(); //Clears all session variable
session_destroy(); //Destroys the current session
header('location:index.php');
?>