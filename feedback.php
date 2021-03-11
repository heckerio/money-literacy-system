<?php
    /* connection file */
    include("connection.php");
    session_start();
	
	$parents_name = $_SESSION['parents_name'];

    $query = "SELECT * from parents WHERE parents_id =".$_SESSION['par_id'];
    $result = mysqli_query($connection, $query);
    // Define variables and initialize with empty values

    // Processing form data when form is submitted
	if(isset($_POST['create']))
				{
							$feedback_details = $_POST['feedback_details'];
							
							if(empty($feedback_details = $_POST['feedback_details']))
							{			
								echo "<script>alert('Please leave a feedback!')</script>";
							}
							elseif(!empty($feedback_details = $_POST['feedback_details']))
							{
								$query ="insert into feedback (feedback_details, parents_id) VALUES ('$feedback_details',".$_SESSION['par_id'].")";

								if(mysqli_query($connection, $query))
								{
										echo ("<script LANGUAGE='JavaScript'>
										window.alert('Feedback Succesfully Sent!');
										window.location.href='feedback.php';
										</script>");
								}
								else 
								{
										echo "<script>alert('Feedback Failed to Send!')</script>";
								}
							}
				}
				
    
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="feedback.css">
        <title>Feedback</title>
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
        <div class="container">
            <br/>
            <h2>Feedback</h2>
            <br/>
            <form name="feedback" action="feedback.php" method="POST">
                <p>As a Parents, share your positive advice and feedback so that they will keep improving</p> 
				<p>Please start your message with your child's name</p>
                <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                </div>
                </div>
                <br/>
                <textarea class="form-control" name="feedback_details" rows="5" placeholder="Give some suggestions to them..." required></textarea>
                <br/>
                <button name="create" class="btn btn-primary btn-lg btn-block" style="background-color:black;">Submit</button>
            </form>
            <br/>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>