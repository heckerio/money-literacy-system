<?php
  session_start();
	$connect = mysqli_connect('localhost', 'root', '', 'moneyliteracy');
	$parents_name = $_SESSION['parents_name'];
	


	$q="SELECT * from parents WHERE parents_id =".$_SESSION['par_id'];
	$res=mysqli_query($connect,$q) or die("Can't Execute Query...");

	$row = mysqli_fetch_assoc($res);
	mysqli_free_result($res);
?>

<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 90%;
  margin: 5%;
  padding: 5%;
  text-align: left;
  font-family: arial;
  color: #696969;
}

.top{
font-family: arial;
text-align: center;
}

p {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
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
<div class="top">
<br>
<h1><?php echo $row['parents_name'];?></h1>
<h4><?php echo $row['parents_maritalstatus'];?></h4>
<p><?php echo $row['parents_email'];?></p>
<p><?php echo $row['parents_phone'];?></p>
</div>

<form method="post">
<div class="card">
 <label for="name">Name</label>
 <input type="text" id="name" name="name" size="50">
 <br>
  <label for="maritalstatus">Marital Status</label>
    <select class="maritalstatus" name="status">
      <option value="married" name="status">Married</option>
      <option value="widowed" name="status">Widowed</option>
      <option value="divorced" name="status">Divorced</option>
    </select>
 <br>
 <label for="address">Address</label>
 <input type="text" id="address" size="50" name="address">
 <br>
 <label for="name">Phone Number</label>
 <input type="text" id="phonenumber" name="phonenumber" size="50">
 <br><br>
  <p><button name="btn">Update Profile</button></p>
</div>
</form>
	<?php
	if(isset($_POST["btn"]))
	{

				$name=$_POST["name"];
				$status=$_POST["status"];
				$address=$_POST["address"];
				$phonenumber=$_POST["phonenumber"];
				
				$q="UPDATE parents SET parents_name='$name', parents_maritalstatus='$status', parents_address='$address',
				parents_phone='$phonenumber' where parents_id=".$_SESSION['par_id'];
				mysqli_query($connect, $q);

				if(mysqli_query($connect, $q))
				{
							echo ("<script LANGUAGE='JavaScript'>
							window.alert('Profile Information Succesfully Updated!');
							window.location.href='ParentProfile.php';
							</script>");
				}
				else {
							echo "<script>alert('Profile Information Failed to Update!')</script>";
				}

	}
	 ?>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>