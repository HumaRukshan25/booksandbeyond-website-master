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
	<title>ROMANCE</title>

<script>
function goBack() {
    window.history.back();
}
</script><style>a:hover, a:active,button:hover{
    background-color: green;
}
.button {
    background-color: Black;
    border: 1px solid white;
    border-radius: 3px 3px 3px 3px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}</style></head>




<body background="bg0.jpg">
<font color=white>


<h1><center>BOOKS & BEYOND</center></h1>
	<h3><center>REDEFINING READING</center></h3>

<hr>
<style>

a
{ color: WHITE;
text-decoration: none;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color:BLACK;
	
    overflow: hidden;
}

li {
    float: left;
	
}

li a, .dropbtn {
    display: inline-block;
    color: WHITE;
    text-align: center;
    padding: 14px 16px;
	
    
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: GREEN;
	    

}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:BLACK;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba (0,0,0,0.2);
}

.dropdown-content a {
    color: WHITE;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: CENTER;
}

.dropdown-content a:hover {background-color: GREEN}

.dropdown:hover .dropdown-content {
    display: block;
}




</style>





<ul>
  <li><a class="active" href="afterlogin.php" TARGET=_top >HOME</a></li>
  
  <li class="dropdown">
    <a href="AUTHORS.php"  TARGET=_top  class="dropbtn">AUTHORS</a>
    <div class="dropdown-content">
      <a href="Chetan.php">CHETAN BHAGAT</a>
      <a href="Durjoy.php">DURJOY DATTA</a>
     <a href="Preeti.php">PREETI SHENOY</a>
      <a href="Ravin.php">RAVINDER SINGH</a>
      <a href="Sudeep.php">SUDEEP NAGARKAR</a>
    </div>
  </li>
  

<li class="dropdown">
    <a href="tables.php" TARGET=_top class="dropbtn">GENRE</a>
    <div class="dropdown-content">
      <a href="mystpage.php">MYSTERY THRILLER</a>
      <a href="horrorpage.php">HORROR</a>
      <a href="romancepage.php">ROMANCE</a>
     <a href="autob.php">AUTOBIOGRAPHIES</a>
      </div>
</li>

<li><a class="active" href="contactusa.php" TARGET=_top>ABOUT US!</a></li>
<li><a href="myprofile.php">MY PROFILE</a></li>
<li><a href="signout.php">SIGN OUT</a></li>

</ul>

<h1> <center> <ib class="dashed"> ROMANCE  </ib> </center></h1>




<h3>
<center>
Discover free love stories for any passion or persuasion <br>
Book a date with your favorite author <br> and read everything from sweet young romance to steamy new adult.
</center>

</h3>
<hr>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<ib class="dashed"><a href="last.php" target=_top> <img src="last.jpg" style="width:150px;height:200px;"></a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"><a href="itoo.php" target=_top> <img src="itoo.jpg" style="width:150px;height:200px;"></a> </ib>&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<ib class="dashed"><a href="2states.php" target=_top> <img src="2states.jpg" style="width:150px;height:200px;"></a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<br> <br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;



<ib class="dashed"><a href="dreams.php" target=_top> <img src="dreams.jpg" style="width:150px;height:200px;"></a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<ib class="dashed"><a href="lifepass.php" target=_top> <img src="lifepass.jpg" style="width:150px;height:200px;"></a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<ib class="dashed"><a href="request.php" target=_top> <img src="request.jpg" style="width:150px;height:200px;"></a>


<BR><BR>
<button class="button" onclick="goBack()">Back</button>















</font>
</html>
