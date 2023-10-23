<html>
 <head>
 <title>BY GASLIGHT</title>

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
		$bookname = "gaslight";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview18.php');  
			}
		}
		else
		{
			echo "Enter Review";
		}
			
		?>
}</script><script>
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
<h1> <center>BY GASLIGHT </center></h1>
<h2> <center> STEVEN PRICE </center></h2>
<p>

<img class="displayed" src="gaslight.jpg" style=width:"10px" height:"10px";> 

<h3>
A magnificent literary historical-suspense novel in the tradition of Eleanor Catton's The Luminaries, Patrick DeWitt's The Sisters Brothers, and Michael Faber's The Crimson Petal and the White, By Gaslightis destined to be one of the most acclaimed and talked-about books of the year. 

London, 1885. In a city of fog and darkness, the notorious thief Edward Shade exists only as a ghost, a fabled con, a thief of other men's futures -- a man of smoke. William Pinkerton is already famous, the son of a brutal detective, when he descends into the underworld of Victorian London in pursuit of a new lead. His father died without ever tracing Shade; William, still reeling from his loss, is determined to drag the thief out of the shadows. Adam Foole is a gentleman without a past, haunted by a love affair ten years gone. When he receives a letter from his lost beloved, he returns to London in search of her; what he learns of her fate, and its connection to the man known as Shade, will force him to confront a grief he thought long-buried. What follows is a fog-enshrouded hunt through sewers, opium dens, drawing rooms, and seance halls. Above all, it is the story of the most unlikely of bonds: between William Pinkerton, the greatest detective of his age, and Adam Foole, the one man who may hold the key to finding Edward Shade. 

Epic in scope, brilliantly conceived, and stunningly written, Steven Price's By Gaslight is a riveting, atmospheric portrait of two men on the brink. Moving from the diamond mines of South Africa to the battlefields of the Civil War, the novel is a journey into a cityscape of grief, trust, and its breaking, where what we share can bind us even against our darker selves. <br> <br>
<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title:By Gaslight<br>
ISBN:077106943X (ISBN13: 9780771069437)<br>
Literary Awards:Giller Prize Nominee for Longlist (2016)<br> <br>


<b><font color=yellow>PDF COMING SOON!</font><b> <br> <br>

<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview18.php';" value="Read  Review">
</form>
</h3><BR><BR>
<button class="button" onclick="goBack()">Back</button></font>
</body>
</html>
