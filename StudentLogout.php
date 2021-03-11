<?php
session_start();
unset($_SESSION["stu_id"]);
unset($_SESSION["students_name"]);
header("Location:StudentLogin.php");
?>