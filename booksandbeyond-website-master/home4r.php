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
   <title>TRENDING IN ROMANCE</title><script>
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
   <h2>TRENDING IN ROMANCE</h2>
	</font>


<ib class="dashed"><a href="last.php" target=_top> <img src="last.jpg" style="width:150px;height:200px;"></a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"><a href="itoo.php" target=_top> <img src="itoo.jpg" style="width:150px;height:200px;"></a> </ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"><a href="request.php" target=_top> <img src="request.jpg" style="width:150px;height:200px;"></a> <ib>





</body>
</html>
