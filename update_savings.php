<?php

	session_start();
	$conn=mysqli_connect("localhost","root","","moneyliteracy")or die("Can't Connect...");
	

	$id=$_GET['sid'];
	$q="SELECT savings_date, savings_details, savings_total from savings WHERE savings_id = $id";
	$res=mysqli_query($conn, $q) or die("Can't Execute Query...");
	$row = mysqli_fetch_assoc($res);
	mysqli_free_result($res);


?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT SAVINGS</title>

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
<h1>UPDATE YOUR SAVINGS</h1>
	<form method="post">
	<label>Date:</label><input type="datetime-local" name="date" value="<?php echo $row['savings_date'];?>"><br><br>
	<label>Amount of savings for today:</label><input type="text" name="total" value="<?php echo $row['savings_total'];?>" size="10"><br><br>
	<label>Details:</label><input type="text" name="details" value="<?php echo $row['savings_details'];?>" size="10"><br><br>

		 <input type="button" name="cancel" value="CANCEL" onClick="window.location='student_savings.php';"/>
		 <input name="pls" type="submit" value="SUBMIT">
	</form>
	<?php
	if(isset($_POST["pls"]))
	{
				$date=$_POST["date"];
				$total=$_POST["total"];
				$details=$_POST["details"];

				$q="UPDATE savings SET savings_date='$date', savings_total='$total' , savings_details='$details' where savings_id='$id'";
				mysqli_query($conn,$q);

				if(mysqli_query($conn, $q))
				{
							echo ("<script LANGUAGE='JavaScript'>
							window.alert('Savings Succesfully Updated!');
							window.location.href='student_savings.php';
							</script>");
				}
				else {
							echo "<script>alert('Savings Failed to Update!')</script>";
				}


	}
	 ?>

</body>
</html>