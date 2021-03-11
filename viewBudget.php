<?php
	
	session_start();
	
	$connect = mysqli_connect('localhost', 'root', '', 'moneyliteracy');
	$parents_name = $_SESSION['parents_name'];


	$id=$_GET['sid'];
	$q="SELECT budget_id, budget_details, budget_date, budget_total from budget where students_id =$id";
	$res=mysqli_query($connect, $q) or die("Can't Execute Query...");

	$row = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!--- meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Student's Budget</title>
	
	<!--- link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="style.css" rel="stylesheet">
	

</head>

<!--- NAVIGATION -->
 <?php include('header.php'); ?>



<!-- /.END-NAVIGATION -->
<div class="container" style = "margin-left: 300px; margin-right: 0px; width:100%;"><br>
		<div class="post">
		<div class="col-lg-8" style="text-align: justify;">
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h1 class="title" style="text-align:center;">STUDENT BUDGET</h1><br>
			<div class="entry" align="center" width="80%">
                    
					<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<tr>
						<thead>
						</tr>
						<tr>
<th style="color:black; text-align:center;" WIDTH="50px"><b>NO</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>ID</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>DETAILS</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>DATE/TIME</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>TOTAL</b></th>

						</tr>
						</thead>

						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td style="text-align:center;">'.$count.'
										<td style="text-align:center;">'.$row['budget_id'].'
										<td style="text-align:center;">'.$row['budget_details'].'
										<td style="text-align:center;">'.$row['budget_date'].'
										<td style="text-align:center;">RM '.$row['budget_total'].'
												
									
									</tr>';
									$count++;
							}
						?>
						
						
                     </div>
					</TABLE>
					<br>
			</div>

		</div>
        </div>
	    </div>
	</div>

<!--- Footer -->

</body>

</html>