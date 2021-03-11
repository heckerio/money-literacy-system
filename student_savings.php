
<?php

	session_start();
	
	$connect = mysqli_connect('localhost', 'root', '', 'moneyliteracy');
	$students_name = $_SESSION['students_name'];



	$q="SELECT * from savings where students_id =".$_SESSION['stu_id'];
	$res=mysqli_query($connect, $q) or die("Can't Execute Query...");

	$row = mysqli_fetch_assoc($res);



?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		<title>Your Savings List</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="">Pocket Guide</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a> <!-- Add username later at here using php -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="StudentProfile.php" class="dropdown-item">Profile</a>
                            <a href="student_budget.php" class="dropdown-item">Budget</a>
                            <a href="student_savings.php" class="dropdown-item">Saving</a>
                            <a href="student_spending.php" class="dropdown-item">Spending</a>
                            <a href="schedule.php" class="dropdown-item">Schedule</a>
                            <a href="learning-history.php" class="dropdown-item">Learning History</a>
                            <a href="feedback-result.php" class="dropdown-item">Parent's Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="StudentLogout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
<h1 style="text-align:center;">SAVINGS</h1><br><br>
<h2 style="text-align:justify;">Definition</h2>
	<p style="text-align:justify;">Saving money means that you find ways to pay less money when you shop. Saving money means paying the best price for the things you want to buy. Saving money also means deciding not to buy everything that you want</p>
<hr>
<h2 style="text-align:justify;">How to manage your savings?</h2>
<p style="text-align:justify;">- Utilize The Power Of Money-saving Incentives</p>
<p style="text-align:justify;">- Buying Used Goods Saves More Money Than You Think</p>
<p style="text-align:justify;">- Take advantage of what your school has to offer in terms of activities, rather than spending money on going out</p>
<p style="text-align:justify;">- Open a savings account that earns interest</p>
<p style="text-align:justify;">- Avoid buying expensive toys, games and branded items</p>
<p style="text-align:justify;">- Set a savings goals</p>
<p style="text-align:justify;">- Track your savings</p>
<hr>
	<!-- start content -->
		<div class="container" style = "margin-left: 300px; margin-right: 0px; width:100%;">
		<div class="post">
		<div class="col-lg-8" style="text-align: justify;">
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h1 class="title" style="text-align:center;">YOUR SAVINGS LIST</h1><br>
			<div class="entry" align="center" width="80%">
                    
					<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<tr>
						<thead>
						<td style = "text-align:center; color:blue;" colspan="10"><a href="add_savings.php">Add New Savings</a></td>
						</tr>
						<tr>
<th style="color:black; text-align:center;" WIDTH="50px"><b>NO</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>ID</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>DETAILS</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>DATE/TIME</b></th>
<th style="color:black; text-align:center;" WIDTH="150px"><b>TOTAL</b></th>
<th style="color:black; text-align:center;" WIDTH="100px"><b>EDIT</b></th>
<th style="color:black; text-align:center;" WIDTH="100px"><b>DELETE</b></th>

						</tr>
						</thead>

						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td style="text-align:center;">'.$count.'
										<td style="text-align:center;">'.$row['savings_id'].'
										<td style="text-align:center;">'.$row['savings_details'].'
										<td style="text-align:center;">'.$row['savings_date'].'
										<td style="text-align:center;">RM '.$row['savings_total'];
										
										
									echo 	'<td style="text-align:center; color:blue;"><a href="update_savings.php?sid='.$row['savings_id'].'">Edit</a>
											<td style="text-align:center; color:blue;"><a href="del_savings.php?sid='.$row['savings_id'].'">Delete</a>
									
												
									
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>