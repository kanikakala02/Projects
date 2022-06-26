<?php
//logs the user out of current session
session_start();
session_unset();
session_destroy();
header("location: faculty.php");
exit;
?>