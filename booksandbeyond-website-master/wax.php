<html>
 <head>
 <title>WAX</title>

<style>

body {   text-align: justify; }

img.displayed {
    display: block;
    margin-left: auto;
    margin-right: 100}
img {
    float: right;
    margin: 0 0 10px 10px;
}
a {
    color: YELLOW;
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
		$bookname = "wax";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview26.php');  
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
<h1> <center>WAX </center></h1>
<h2> <center>GINA DAMICO </center></h2>
<p>

<img class="displayed" src="wax.jpg" style=width:"10px" height:"10px";> 

<h3>
Paraffin, Vermont, is known the world over as home to the Grosholtz Candle Factory. But behind the sunny retail space bursting with overwhelming scents and homemade fudge,seventeen year old Poppy Palladino discovers something dark and unsettling: a back room filled with dozens of startlingly life like wax sculptures, crafted by one very strange old lady. Poppy hightails it home, only to be shocked when one of the figures a teenage boy who doesn't seem to know what he is jumps naked and screaming out of the trunk of her car. She tries to return him to the candle factory, but before she can, a fire destroys the mysterious workshop and the old woman is nowhere to be seen.

With the help of the wax boy, who answers to the name Dud, Poppy resolves to find out who was behind the fire. But in the course of her investigation,she discovers that things in Paraffin aren't always as they seem, that the Grosholtz Candle Factory isn't as pure as its reputation and that some of the towns people she's known her entire life may not be as human as they once were. In fact, they're starting to look a little . . . waxy. Can Poppy and Dud extinguish the evil that's taking hold of their town before it's too late?
<br>
<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title:Wax<br>
ISBN: 0544633156 (ISBN13: 9780544633155)<br>
Edition Language:English<br><br>
<b><font color=yellow>PDF COMING SOON!</font><b> <br> <br>


<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview26.php';" value="Read  Review">
</form>
</h3><BR><BR>

<button class="button" onclick="goBack()">Back</button>
</body>
</html>
