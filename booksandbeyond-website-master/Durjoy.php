<?php
session_start();
if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
?>
<html>
<head> <title>DURJOY DATTA </title>
<style> body {   text-align: justify; }
img.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }
a:hover, a:active,button:hover{
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
}
</style><script>
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
<h1> <center> DURJOY DATTA </center> </h1>
<br> <br>

<img class="displayed" src="durjoy.jpg" style=width:"130px"height:"150 px"> 

<p><align=left>
Durjoy Datta is an Indian novelist, screenwriter and entrepreneur. He has four shows, Sadda Haq - My Life, My Choice, Million Dollar Girl - From Banaras to Paris on Channel V India,Kuch Rang Pyar Ke Aise Bhi on Sony TV and Ek Veer Ki Ardaas...Veera on Star Plus to his credit.

He served at NIIT Ltd. Siemens AG, and American Express until he co-founded the publishing house Grapevine India in September 2011. In 2009, he was recognized as the young achiever by The Times of India. He was also chosen as one of the two young achievers in the field of Media and Communications by Whistling Woods International in 2011.His debut show Sadda Haq - My Life, My Choice won the Youth Show - fiction category at Zee Gold Awards in 2014 and at Indian Telly Awards in 2014 and 2015. 

In 2012, he was one of the recipients of the Teacher's Achievement Awards.He has also spoken in various TEDx conferences in colleges across India.<br> 
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
<ib class="dashed"><a href="last.php" target=_top> <img src="last.jpg" style="width:150px;height:200px;"></a></ib>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<a href="holdmyhand.php" target=_top> <img src="holdmyhand.jpg" style="width:150px;height:200px;"></a>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<a href="whenonly.php" target=_top> <img src="whenonly.jpg" style="width:150px;height:200px;"></a>
<BR><BR>
<button class="button" onclick="goBack()">Go Back</button>




</font>
</body>
</html>	