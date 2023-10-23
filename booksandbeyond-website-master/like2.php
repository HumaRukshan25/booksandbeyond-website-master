<?php
$num = $_GET["x"];

$conn = mysqli_connect("localhost","root","","bb");
$query = "update login_activity set likes=likes+1 where Sr_no = $num";
			if(mysqli_query($conn,$query))
			{
				header('Location: readreview2.php');  
			}
	
		else
		{
			echo mysqli_error($conn);
		}
?>
<html>
<head></style><script>
function goBack() {
    window.history.back();
}
</script>
</head><body><br><br>
<button onclick="goBack()">Back</button></body>
</html>