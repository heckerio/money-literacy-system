<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body {
	  font-family: Arial, Helvetica, sans-serif;
	}

	* {
	  box-sizing: border-box;
	}

	/* Add padding to containers */
	.container {
	  padding: 10px 200px 10px 200px;
	  background-color: white;
	  max-width: 100%;
	}

	/* Full-width input fields */
	input[type=text], input[type=password] {
	  width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  display: inline-block;
	  border: none;
	  background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus {
	  background-color: #ddd;
	  outline: none;
	}

	/* Overwrite default styles of hr */
	hr {
	  border: 1px solid #f1f1f1;
	  margin-bottom: 25px;
	}

	/* Set a style for the submit button */
	.registerbtn {
	  background-color: black;
	  color: white;
	  padding: 16px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 100%;
	  opacity: 0.9;
	}

	.registerbtn:hover {
	  opacity: 1;
	}

	/* Add a blue text color to links */
	a {
	  color: dodgerblue;
	}

	/* Set a grey background color and center the text of the "sign in" section */
	.signin {
	  text-align: center;
	}
	
	.sis{
	width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  display: inline-block;
	  border: none;
	  background: #f1f1f1;
	}
	</style>
</head>

<body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.html">Pocket Guide</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a> <!-- Add username later at here using php -->
                        <!--<div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Budget</a>
                            <a href="#" class="dropdown-item">Saving</a>
                            <a href="#" class="dropdown-item">Spending</a>
                            <a href="#" class="dropdown-item">Schedule</a>
                            <a href="#" class="dropdown-item">Learning History</a>
                            <a href="#" class="dropdown-item">Parent's Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>-->
        </nav>
<form action="StudentRegister.php" method = "post">
  <div class="container">
  <br>
    <h1 style = "text-align: center;">Registration for Students</h1>
    <p style = "text-align: center;">Please fill in this form to create an account.</p>
    <hr>
<div style ="margin-left: auto; margin-right: auto;" class="container">


	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Eg: Elizabeth Tan" name="students_name" id="name" value="<?php if(isset($_POST['students_name'])) echo $_POST['students_name'];?>"  />
	<span id="name_error" style="color:red;"><?php if(isset($errors['students_name1'])) echo $errors['students_name1']; ?></span>
	<span id="name_error" style="color:red;"><?php if(isset($errors['students_name2'])) echo $errors['students_name2']; ?></span>

    <label for="sis"><b>Standard in School</b></label>
    <select class="sis" name="students_schoolyear">
      <option <?php if(isset($_POST['students_schoolyear'])) echo $_POST['students_schoolyear']; ?>" value="4" selected>4</option>
      <option <?php if(isset($_POST['students_schoolyear'])) echo $_POST['students_schoolyear']; ?>" value="5">5</option>
      <option <?php if(isset($_POST['students_schoolyear'])) echo $_POST['students_schoolyear']; ?>" value="6">6</option>
    </select>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="students_email" id="email" value="<?php if(isset($_POST['students_email'])) echo $_POST['students_email']; ?>" />
	<span id="email_error" style="color:red;"><?php if(isset($errors['students_emai1'])) echo $errors['students_emai1'];   ?></span>
	
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="students_password" value = "<?php if(isset($_POST['students_password'])) echo $_POST['students_password']; ?>"  />
	<span id="passworderr" style="color:red;"><?php if(isset($errors['students_password1'])) echo $errors['studdents_password1']; ?></span>

    <label for="phone"><b>Phone number</b></label>
    <input type="text" placeholder="Eg: 017654321" name="students_phone" value = "<?php if(isset($_POST['students_phone'])) echo $_POST['students_phone'];?>" />
	<span id="contact_error" style="color:red;"><?php if(isset($errors['students_phone1'])) echo $errors['students_phone1']; ?></span>

    <button type="submit" name = "btn" class="registerbtn">Register</button>
  </div>
  <hr>
  <div class="signin">
    <p>Already have an account? <a href="StudentLogin.php">Login</a>.</p>
  </div>
</form>


	<?php

	if($_POST){

	//checking error
		
/*$errors = array();
//$matrixID=$_POST['Student_Matrix_ID'];
$students_email=$_POST['students_email'];
$emailFormat='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
$students_name=$_POST['students_name'];
$students_password=$_POST['students_password'];
//$ConfirmPassword=$_POST['Student_Confirm_Password'];
		
		if(empty($students_email) || !preg_match($emailFormat,$students_email) ){
			$errors['students_emai1']="ERROR:Email must be valid format";
		}


		if(empty($students_name)){
			$errors['students_name1']="ERROR:Name is required";
		}
		
		
		 if(!preg_match("/^[a-zA-Z ]*$/",$students_name))
		{
			$errors['students_name2']="ERROR:Name should not have number and symbol";
		}
		
		
		/*

		if(empty($pnumber) || !preg_match($contactformat,$pnumber)){
			$errors['contact1']="ERROR:Invalid contact number";
		}

		if(empty($psw) || strlen($psw) < 6){
			$errors['password1']="ERROR:Password must be atleast 6 character";
		}
		
		*/
		$con = mysqli_connect('localhost', 'root', '', 'moneyliteracy');
	//include("db.php");
	
	if(isset($_POST['btn']))
		{
			//$students_id=$_POST['students_id'];
			$students_name=$_POST['students_name'];
			$students_schoolyear=$_POST['students_schoolyear'];
			$students_email=$_POST['students_email'];
			$students_password=$_POST['students_password'];
			$students_phone=$_POST['students_phone'];
			/*$user_address=$_POST['user_address'];*/
			
			
			
		if (mysqli_query($con,"INSERT INTO students( students_name, students_schoolyear, students_email, students_password, students_phone) VALUES ('$students_name','$students_schoolyear', '$students_email',md5('$students_password'),'$students_phone')"))
		{
				echo ("<script LANGUAGE='JavaScript'>
            window.alert('Student Succesfully Register!');
            window.location.href='StudentLogin.php';
            </script>");
		}
		  else {
                 echo "<script>alert('Student failed to register!')</script>";
              }
		}
			
		
	
	
	
		
	}

	?>
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>	
</html>
