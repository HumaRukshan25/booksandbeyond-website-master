﻿<html>
 <head>
 <title>YOUR DREAMS ARE MINE NOW</title>

<style> body {   text-align: justify; }

img.displayed {
    display: block;
    margin-left: auto;
    margin-right: 100}
img {
    float: right;
    margin: 0 0 10px 10px;
}
a { color: WHITE;}

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
</style>

<script>
function write_review(f1)
{
	

		<?php
		session_start();
		if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
		$rev = $_POST["review"];
		$bookname = "yourdreamsareminenow";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview16.php');  
			}
		}
		else
		{
			echo "Enter Review";
		}
			
		?>
}</script>

<script>
function goBack() {
    window.history.back();
}
</script>
</head>

<body background=bg0.jpg>


	<font color=WHITE>
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
    <a href="AUTHORS.HTML"  TARGET=_top  class="dropbtn">AUTHORS</a>
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

<h1> <center>YOUR DREAMS ARE MINE NOW </center></h1>
<h2> <center> RAVINDER SINGH</center></h2>
<p>

<img class="displayed" src="dreams.jpg" style=width:"10px" height:"10px";> 

<h3>
It cant be love . . . he thinks and immediately his heart protests.
They are complete opposites!
She’s a small town girl who takes admission in Delhi University (DU). An idealist, studies are her first priority.
He’s a Delhi guy, seriously into youth politics in the DU.He fights to make his way.Student union elections are his first priority.
But then opposites attract as well!
A scandal on campus brings them together, they begin to walk the same path and somewhere along, fall in love . . .
But their fight against evil comes at a heavy price,<br> which becomes the ultimate test of their lives.
Against the backdrop of dominant campus politics,Your Dreams Are Mine Now is an innocent love story that is bound to evoke strong emotions in your heart.
<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title: Your Dreams Are Mine Now<br>
ISBN: 0143423002 (ISBN13: 9780143423003)<br>
Edition Language: English<br><br>

</h3><br><br>
<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="dreams.pdf">Your Dreams Are Mine Now-Ravinder Singh.pdf</a> <br> <br>

<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview16.php';" value="Read  Review">
</form>
</h3><BR><BR>


<button class="button" onclick="goBack()">Back</button></font>
</body>
</html>
