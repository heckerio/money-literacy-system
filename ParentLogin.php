<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
		<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 15%;
}

.container {
  padding: 10px 300px 10px 300px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  
 a.button{
  text-align:center;
  }
  
</style>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">I'm not a parents</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="index.php" class="dropdown-item">Choose</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
<!-- Login form -->
<br>
<h2 style = "text-align: center;">Login</h2>
<br>
<form action="ParentLogin.php" method="post">
  <div class="imgcontainer">
    <img src="parents.png" alt="Avatar" class="avatar">
  </div>

    <div style ="margin-left: auto; margin-right: auto;" class="container">
     <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="parents_email" value="<?php if(isset($_POST['parents_email'])) echo $_POST['parents_email'];?>" />

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="parents_password" >
	<span id="passworderr" style="color:red;"><?php if(isset($errors['password1'])) echo $errors['password1']; ?></span>
        
    <button type="submit" name="signin">Login</button>
	<p>Don't have an account for Pocket Guide? <a href = "ParentRegister.php" name ="btn" class = "button">Register</a>.</p>
  </div>
</form>

<?php 

session_start();
$parents_name = "";
$parents_email    = "";
$parents_id = "";
$parents_phone = "";
$parents_address = "";
$parents_maritalstatus ="";
$errors = array();

$con = mysqli_connect('localhost', 'root', '', 'moneyliteracy');

if(isset($_SESSION['parents_name'])){
header('location:ParentLogin.php');}

if (isset($_POST['signin'])) {
  $parents_email = mysqli_real_escape_string($con, $_POST['parents_email']);
  $parents_password = mysqli_real_escape_string($con, $_POST['parents_password']);

  if (empty($parents_email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($parents_password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$parents_password = md5($parents_password);
  	$query = "SELECT * FROM parents WHERE parents_email='$parents_email' AND parents_password='$parents_password'";
  	$results = mysqli_query($con, $query);
	$row=mysqli_fetch_array($results);
	
  	if (mysqli_num_rows($results) == 1) {
	  $_SESSION['par_id']=$row['parents_id'];
	  $_SESSION['parents_name'] = $parents_name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ParentProfile.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>	
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>