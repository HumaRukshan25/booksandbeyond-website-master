<?php
session_start();
if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
?>
<html>
 <head>
   <link rel="stylesheet" type="text/css" href="ib.css">
   <title>TRENDING IN HORROR</title>
<script>
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
   <h2>TRENDING IN HORROR</h2>
	</font>


<ib class="dashed"> 
<a href="exorcist.php" target=_top>
<img src="exorcist.jpeg" style="width:150px;height:200px;"></a> </ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"><a href="shimla.php" target=_top> <img src="shimla.jpg" style="width:150px;height:200px;"></a>  </ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"><a href="face.php" target=_top> <img src="face.jpg" style="width:150px;height:200px;"></a>  </ib>






</body>
</html>
