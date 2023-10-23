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

 <title> CHETAN BHAGAT </title>
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

<h1> <center> CHETAN BHAGAT </center> </h1>
<br> <br>

<img class="displayed" src="chetan.jpg" style=width:"130px"height:"150 px"> 

<p><align=left>
Chetan Bhagat (born 22 April 1974) is an Indian author, columnist, screenwriter, television personality and motivational speaker, known for his English-language dramedy novels about young urban middle-class Indians.

A noted public intellectual, Bhagat also writes for columns about youth, career development and current affairs for The Times of India (in English) and Dainik Bhaskar (in Hindi).

Bhagat's novels have sold over seven million copies. In 2008, The New York Times cited Bhagat as "the biggest selling English language novelist in India’s history".

Bhagat's screenwriting efforts have included the dramedies Kai Po Che! (2013), 2 States (2014) and the action-superhero movie Kick (2015). He won the Filmfare Award for Best Screenplay for Kai Po Che! at the 59th Filmfare Awards in January 2014.
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

 
<a href="onenyt.php" target=_top>
<img src="onenight.jpg" style="width:150px;height:200px;"> </a> 
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<a href="2states.php" target=_top>
<img src="2states.jpg" style="width:150px;height:200px;"> </a> 
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


<BR><BR>
<button class="button" onclick="goBack()">Back</button>
</font>
</body>
</html>	