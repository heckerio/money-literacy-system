<?php

			$conn=mysqli_connect("localhost","root","","moneyliteracy")or die("Can't Connect...");

			$id=$_GET['sid'];
			$query = "DELETE FROM savings WHERE savings_id=$id";
			mysqli_query($conn, $query);

			if(mysqli_query($conn, $query))
				{
							echo ("<script LANGUAGE='JavaScript'>
							window.alert('Savings Succesfully Deleted!');
							window.location.href='student_savings.php';
							</script>");
				}
				else {
							echo "<script>alert('Savings Failed to Delete!')</script>";
				}


?>