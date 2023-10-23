<?php
session_start();
if (!isset($_SESSION["is_auth"]))
		{
	   	 header("location: login.php");
	    	exit;
		}
?>
<html>
<head> <title> PREETI SHENOY </title>
<style> body {   text-align: justify; }
img.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto;

}

.button{
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
}

</style>
<script>
function goBack() {
    window.history.back();
}
</script><script>
function goBack() {
    window.history.back();
}
</script>
</head>

<body background=bg0.jpg>
<font color=white>
<h1 style="font-family:Times New Roman ;font size:24px"><center>BOOKS & BEYOND</center></h1>
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

<h1> <center> PREETI SHENOY </center> </h1>
<br> <br>

<img class="displayed" src="preeti.jpg" style=width:"130px"height:"150 px">

<p><align=left>
Preeti Shenoy is an Indian author.Consistently nominated for the Forbes List of the 100 most influential celebrities of India since 2013,Shenoy has varied interests ranging from photography and yoga to sociology.
India Today calls her 'the only woman in the highest-selling league,'alluding to the immense popularity of her books.
</align>
</p>

<h3><center>WORKS</center></h3>

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



<a href="reason.php" target=_top><img src="reason.jpg" style="width:150px;height:200px;">
</a>




&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<a href="cannothave.php" target=_top> <img src="cannothave.jpg" style="width:150px;height:200px;"></a>




<br><br>
<button class="button" onclick="goBack()">Go Back</button>

</font>
</body>
</html>