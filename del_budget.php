<?php

			$conn=mysqli_connect("localhost","root","","moneyliteracy")or die("Can't Connect...");

			$id=$_GET['sid'];
			$query = "DELETE FROM budget WHERE budget_id=$id";
			mysqli_query($conn, $query);

			if(mysqli_query($conn, $query))
				{
							echo ("<script LANGUAGE='JavaScript'>
							window.alert('Budget Succesfully Deleted!');
							window.location.href='student_budget.php';
							</script>");
				}
				else {
							echo "<script>alert('Budget Failed to Delete!')</script>";
				}


?>