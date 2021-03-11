<?php

			$conn=mysqli_connect("localhost","root","","moneyliteracy")or die("Can't Connect...");

			$id=$_GET['sid'];
			$query = "DELETE FROM spending WHERE spending_id=$id";
			mysqli_query($conn, $query);

			if(mysqli_query($conn, $query))
				{
							echo ("<script LANGUAGE='JavaScript'>
							window.alert('Spending Succesfully Deleted!');
							window.location.href='student_spending.php';
							</script>");
				}
				else {
							echo "<script>alert('Spending Failed to Delete!')</script>";
				}


?>