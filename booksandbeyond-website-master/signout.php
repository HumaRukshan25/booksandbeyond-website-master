<html>
<body background=bg0.jpg>


	<font color=WHITE>
	<h1 style="font-family:Times New Roman ;font size:24px"><center>BOOKS & BEYOND</center></h1>
	<h3><center>REDEFINING READING</center></h3>
<hr>

<?php
	session_start();
	unset($_SESSION['is_auth']);
	session_destroy();
	
		header('Location: HOME.html'); 
?>
</html>