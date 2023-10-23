<?php
$num = $_GET["x"];

$conn = mysqli_connect("localhost","root","","bb");
$query = "update login_activity set likes=likes+1 where Sr_no = $num";
			if(mysqli_query($conn,$query))
			{
				header('Location: readreview27.php');  
			}
	
		else
		{
			echo mysqli_error($conn);
		}
?>
