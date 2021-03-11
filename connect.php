<?php
error_reporting(0);

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "moneyliteracy";


$conn = mysqli_connect ($dbservername, $dbusername, $dbpassword, $db);

if (!$conn)
{
    die ("Can't Connect...");
}

$_stuId = "students_id";
$_prtId = "parents_id";
$_budId = "budget_id";
$_budDate = "budget_date";
$_savId = "savings_id";
$_savDate = "savings_date";
$_speId = "spending_id";
$_speDate = "spending_date";
?>