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
   <title>
	GENRE
   </title>
<script>
function goBack() {
    window.history.back();
}
</script>
<style>
a
{ color: WHITE;
text-decoration: none;
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
}</style>
 </head>	 
<font color=white>
<h1><center>BOOKS & BEYOND</center></h1>
	<h3><center>REDEFINING READING</center></h3>
<hr>


<body background="bg0.jpg">




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
<br> <br>
<table style="width:30%" align="center" border="2" cellpadding="0" bordercolor="ORANGE" bgcolor="WHITE" >
 <tr>
 <th colspan="5">GENRES</th>
 <tr>
    <td>Mystery Thriller</td>
    <td>Horror</td>
    <td>Romance</td>  
<td>Autobiographies</td>	
 </tr>
 
 
</table>

<br>
<br>


<h2> <center> OUR PICKS!</center> </h2>
<h3><center>  A list of recommended books from our panel of Editors!</center> </h3>

</font>

<table style="width:50%" align="center" border="1" bordercolor="ORANGE" bgcolor="WHITE" >
  <tr>
    <th>Genre</th>
    <th>Book</th> 
    <th>Author</th>
  </tr>

  <tr>
    <td>Romance</td>
    <td>Can Love Happen Twice?</td> 
    <td>Ravinder Singh</td>
  </tr>
  <tr>
    <td>Mystery Thriller</td>
    <td>The Accidental Apprentice</td> 
    <td>Vikas Swarup</td>
  </tr>

<tr>
    <td> Romance</td>
    <td>2 States</td> 
    <td>Chetan Bhagat</td>
  </tr>

<tr>
    <td>Mystery Thriller</td>
    <td>One Night @The Call Center</td> 
    <td>Chetan Bhagat</td>
  </tr>

<tr>
    <td>Horror</td>
    <td>The Exorcist</td> 
    <td>William Blatty</td>
  </tr>

<tr>
    <td>Autobiographies</td>
    <td>Playing It My Way</td> 
    <td> Sachin Tendulkar</td>
  </tr>
</table>
<BR><BR>
<button class="button" onclick="goBack()">Back</button>
</body>
</html>