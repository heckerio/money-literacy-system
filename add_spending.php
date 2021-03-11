<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'moneyliteracy');
	$students_name = $_SESSION['students_name'];


	$q="SELECT * from students WHERE students_id =".$_SESSION['stu_id'];
	$res=mysqli_query($connect,$q) or die("Can't Execute Query...");

	$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD SPENDING</title>
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
      	<h1>Add Your Spending for today</h1>
            	<form name="add_spending" action="add_spending.php" method="post" enctype="multipart/form-data">
                  	   
                        <table>
                          <tr>
                              <td>Date: </td>
                              <td><input type="datetime-local" name="date"/></td>
                          </tr><tr></tr>
						  <tr>
                              <td>Amount of spending for today: </td>
                              <td><input type="text" name="total"/></td>
                          </tr><tr></tr>
                          <tr>
                              <td>Details: </td>
                              <td><input type="text" name="details"/></td>
                          </tr><tr></tr>
                          <tr>
							  <td colspan="1"><input type="button" name="cancel" value="CANCEL" onClick="window.location='student_spending.php';"/></td>
                              <td colspan="2"><input type="submit" name="submit" value="ADD"></td>
                          </tr>
                        </table>


            	</form>

              <?php
                  mysqli_connect("localhost", "root", "");
                  mysqli_select_db($connect, "moneyliteracy");


                  if(isset($_POST['submit']))
                  {
                        $date = $_POST['date'];
                        $total = $_POST['total'];
						$details = $_POST['details'];
                     
                        $query = "insert into spending (spending_date, spending_total, spending_details, students_id ) VALUES ('$date', '$total', '$details', ".$_SESSION['stu_id'].")";

                        if(mysqli_query($connect, $query))
				                {
                							echo ("<script LANGUAGE='JavaScript'>
                							window.alert('Spending Succesfully Added!');
                							window.location.href='student_spending.php';
                							</script>");
				                }
                				else {
                							echo "<script>alert('Spending Failed to Add!')</script>";
                				}

                  }
               ?>
</body>
</html>