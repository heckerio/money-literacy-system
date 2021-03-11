<?php

	session_start();
	
	$connect = mysqli_connect('localhost', 'root', '', 'moneyliteracy');
	$parents_name = $_SESSION['parents_name'];



	$q="SELECT * from students";
	$res=mysqli_query($connect, $q) or die("Can't Execute Query...");

	$row = mysqli_fetch_assoc($res);

?><html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		<title>View Students</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand">Pocket Guide</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Parent</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="ParentProfile.php" class="dropdown-item">Profile</a>
							<a href="viewStudentList.php" class="dropdown-item">View Students</a>
                            <a href="feedback.php" class="dropdown-item">Submit feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="ParentLogout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
		

	<!-- start content -->
	<div class="container" style = " margin-left: 300px; width:100%;"><br>
		<div class="post">
		<div class="col-lg-8" style="text-align: justify;">
		<div class="shadow p-3 mb-5 bg-white rounded">
			
			<div class="entry" align="center" width="80%">
                    
					<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<tr>
<th style="color:black; text-align:center;" WIDTH="50px"><b>NO</b></th>
<th style="color:black; text-align:center;" WIDTH="50px"><b>NAME</b></th>
<th style="color:black; text-align:center;" WIDTH="50px"><b>STANDARD</b></th>
<th style="color:black; text-align:center;" WIDTH="50px"><b></b></th>
<th style="color:black; text-align:center;" WIDTH="50px"><b></b></th>
<th style="color:black; text-align:center;" WIDTH="50px"><b></b></th>
<th style="color:black; text-align:center;" WIDTH="50px"><b></b></th>

						</tr>
						</thead>

						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td style="text-align:center;">'.$count.'
										<td style="text-align:center;">'.$row['students_name'].'
										<td style="text-align:center;">Standard '.$row['students_schoolyear'];
										
										
									echo 	'<td style="text-align:center; color:blue;"><a href="viewProfile.php?sid='.$row['students_id'].'">View Profile</a>
											 <td style="text-align:center; color:blue;"><a href="viewBudget.php?sid='.$row['students_id'].'">View Budget</a>
											 <td style="text-align:center; color:blue;"><a href="viewSavings.php?sid='.$row['students_id'].'">View Savings</a>
											 <td style="text-align:center; color:blue;"><a href="viewSpending.php?sid='.$row['students_id'].'">View Spending</a>
									
												
									
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