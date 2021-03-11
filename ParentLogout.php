<?php
session_start();
unset($_SESSION["par_id"]);
unset($_SESSION["parents_name"]);
header("Location:ParentLogin.php");
?>