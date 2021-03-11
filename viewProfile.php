<?php

session_start();
$conn=mysqli_connect("localhost","root","","moneyliteracy")or die("Can't Connect...");
	//$students_name = $_SESSION['students_name'];

	$id=$_GET['sid'];
	$q="SELECT students_name, students_schoolyear, students_email, students_phone from students WHERE students_id = $id";
	$res=mysqli_query($conn, $q) or die("Can't Execute Query...");
	$row = mysqli_fetch_assoc($res);
	mysqli_free_result($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!--- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student's Profile</title>
	
	<!--- link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="style.css" rel="stylesheet">
	

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="300">

<!--- NAVIGATION -->
 <?php include('header.php'); ?>


<!-- /.END-NAVIGATION -->

<div class="container" style = "margin-left: 300px; margin-right: 0px; margin-top: 50px; width:100%;"><br>
	<div class="row">
		<div class="col-lg-8" style="text-align: justify;">
		<div class="shadow p-3 mb-5 bg-white rounded">
			<div class="big_title">Student Information</div>
			<hr>

			<form name="myform" method="get" action="">
				
				<div class="row">
					<div class="col-lg-6" style="margin-bottom:30px;">
						<ion-icon name="people-outline"></ion-icon><b> Name</b><br>
						 <span id="nameSpan" class="help-block"><?php echo $row['students_name']; ?></span>
					</div><br>
					<div class="col-lg-8" style="margin-bottom:30px;">
						<ion-icon name="calendar-outline"></ion-icon><b> School Year</b><br>
						 <span id="nameSpan" class="help-block">Standard <?php echo $row['students_schoolyear']; ?></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12" style="margin-bottom:30px;">
						<ion-icon name="mail-outline"></ion-icon><b> Email</b><br>
						<span id="nameSpan" class="help-block"><?php echo $row['students_email']; ?></span>
					</div>
					<div class="col-lg-12" style="margin-bottom:30px;">
						<ion-icon name="phone-portrait-outline"></ion-icon><b> Phone Number</b><br>
						<span id="nameSpan" class="help-block"><?php echo $row['students_phone']; ?></span>
					</div>
					
				</div>
				</div>
				
			</form>
			
		</div>
	</div>
</div><br>


<!--- Footer -->

</body>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</html>