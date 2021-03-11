<?php

	session_start();
	$conn=mysqli_connect("localhost","root","","moneyliteracy")or die("Can't Connect...");
	//$students_name = $_SESSION['students_name'];

	$id=$_GET['sid'];
	$q="SELECT budget_date, budget_details, budget_total from budget WHERE budget_id = $id";
	$res=mysqli_query($conn, $q) or die("Can't Execute Query...");
	$row = mysqli_fetch_assoc($res);
	mysqli_free_result($res);




?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT BUDGET</title>

<style>
h1{
	text-align:center;
	font-family: arial;
	font-weight:bold;
}
form{
	background-color: white;
	margin:5% 30%;
	border-radius:10px;
	border:2px solid grey;
	padding:10px 20px;
}
a:hover{
	color:red;
	cursor:pointer;
}
</style>
</head>
<body>
<h1>UPDATE YOUR BUDGET</h1>
	<form method="post" >
	<label>Date:</label><input type="datetime-local" name="date" value="<?php echo $row['budget_date'];?>"><br><br>
	<label>Amount of budget for today:</label><input type="text" name="total" value="<?php echo $row['budget_total'];?>" ><br><br>
	<label>Details:</label><input type="text" name="details" value="<?php echo $row['budget_details'];?>" ><br><br>

		 <input type="button" name="cancel" value="CANCEL" onClick="window.location='student_budget.php';"/>
		 <input name="pls" type="submit" value="SUBMIT">
	</form>
	<?php
	if(isset($_POST["pls"]))
	{
				$date=$_POST["date"];
				$total=$_POST["total"];
				$details=$_POST["details"];

				$q="UPDATE budget SET budget_date='$date', budget_total='$total' , budget_details='$details' where budget_id='$id'";
				mysqli_query($conn,$q);

				if(mysqli_query($conn, $q))
				{
							echo ("<script LANGUAGE='JavaScript'>
							window.alert('Budget Succesfully Updated!');
							window.location.href='student_budget.php';
							</script>");
				}
				else {
							echo "<script>alert('Budget Failed to Update!')</script>";
				}


	}
	 ?>

</body>
</html>