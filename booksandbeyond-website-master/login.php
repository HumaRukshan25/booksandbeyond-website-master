<?php
session_start();
if(isset($_POST["su"]))
{
  $userid = $_POST["uid"];
$password = $_POST["psw"];
 $_SESSION['is_auth'] = true;
$_SESSION["uname"]=$userid;
$con = mysqli_connect("localhost","root","","BB");
$que = "select * from member where id= '$userid' and password = '$password'";
$res = mysqli_query($con,$que);

if (mysqli_num_rows($res)>0)
{
	header("Location: afterlogin.php"); 
}		
else
{
	echo '<script type="text/javascript">alert("Check User ID and password")</script>';
}
}
?>
<html>

<head>
	<title>LOG IN!</title>
<style>
a
{ color: WHITE;
text-decoration: none;
}

.button {
    background-color: green;
    border: 1px solid black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>


<script>
function goBack() {
    window.history.back();
}

</script>
</head>

<body background="bg0.jpg">
<font color=white>

<h1><center>BOOKS & BEYOND</center></h1>
	<h3><center>REDEFINING READING</center></h3>
<hr>

<style>
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
  <li><a class="active" href="HOME.HTML" TARGET=_top >HOME</a></li>
  
  <li class="dropdown">
    <a href="AUTHORS1.HTML"  TARGET=_top  class="dropbtn">AUTHORS</a>
    <div class="dropdown-content">
      <a href="Chetan1.html">CHETAN BHAGAT</a>
      <a href="Durjoy1.html">DURJOY DATTA</a>
     <a href="Preeti1.html">PREETI SHENOY</a>
      <a href="Ravin1.html">RAVINDER SINGH</a>
      <a href="Sudeep1.html">SUDEEP NAGARKAR</a>
    </div>
  </li>
  

<li class="dropdown">
    <a href="tablesb.html" TARGET=_top class="dropbtn">GENRE</a>
    <div class="dropdown-content">
      <a href="mystpage1.html">MYSTERY THRILLER</a>
      <a href="horrorpage1.html">HORROR</a>
      <a href="romancepage1.html">ROMANCE</a>
     <a href="autob1.html">AUTOBIOGRAPHIES</a>
      </div>
</li>

<li><a class="active" href="contactus.html" TARGET=_top>ABOUT US!</a></li>
<li><a class="active" href="login.php" TARGET=_top>LOG IN</a></li>
<li><a class="active" href="signup.php" TARGET=_top>SIGN UP!</a></li>


</ul>

<center> <h1> LOG IN! </h1> </center>


<form action= "login.php" method="post">
 
  <center> User ID:<br>
	<input type="text" name="uid" size="25"></center> <br>


<center> Password:<br>
  <input type="password" name="psw"></center>
  <br>

<center> <input type="submit" class="button" value="Log in" name = su></center>
<br> <br>
<align=left>
</font><button class="button" onclick="goBack()">Back</button></align>
</form>

</body>

</html>

