<?php
session_start();
if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
?>
<html> 
 <head> <link rel="stylesheet" type="text/css" href="ib.css">
   <title>TRENDING IN BIOGRAPHIES AND AUTOBIOGRAPHIES</title><script>
function goBack() {
    window.history.back();
}
</script>
 </head>

<style>

img {
    opacity: 0.5;
    filter: alpha(opacity=50);
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); 
}
</style>



<body>
	<font color=WHITE>
   <h2>TRENDING IN BIOGRAPHIES AND AUTOBIOGRAPHIES</h2>
	</font>

<ib class="dashed"> <a href="dongri.php" target=_top> <img src="dongri.jpg" style="width:150px;height:200px;"> </a> </ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"> <a href="sachin.php" target=_top> <img src="tendulkar.jpeg" style="width:150px;height:200px;"> </a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"> <a href="apj.php" target=_top> <img src="apj.jpg" style="width:150px;height:200px;"> </a> </ib>







</body>
</html>
