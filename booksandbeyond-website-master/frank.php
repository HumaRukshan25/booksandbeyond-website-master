<html>
 <head>
 <title>FRANKENSTEIN</title>

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
		$bookname = "frankenstein";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview17.php');  
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


<h1> <center>FRANKENSTEIN </center></h1>
<h2> <center> MARY SHELLEY </center></h2>
<p>

<img class="displayed" src="frank.jpg" style=width:"10px" height:"10px";> 

<h3>
Mary Shelley began writing Frankenstein when she was only eighteen. At once a Gothic thriller, a passionate romance, and a cautionary tale about the dangers of science, Frankenstein tells the story of committed science student Victor Frankenstein. Obsessed with discovering the cause of generation and life and bestowing animation upon lifeless matter, Frankenstein assembles a human being from stolen body parts but; upon bringing it to life, he recoils in horror at the creature's hideousness. Tormented by isolation and loneliness, the once-innocent creature turns to evil and nleashes a campaign of murderous revenge against his creator, Frankenstein.

Frankenstein, an instant bestseller and an important ancestor of both the horror and science fiction genres, not only tells a terrifying story, but also raises profound, disturbing questions about the very nature of life and the place of humankind within the cosmos: What does it mean to be human? What responsibilities do we have to each other? How far can we go in tampering with Nature? In our age, filled with news of organ donation genetic engineering, and bio-terrorism, these questions are more relevant than ever. <br><br>
<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title:Frankenstein: or, The Modern Prometheus<br>
ISBN: 0141439475 (ISBN13: 9780141439471)<br>
Edition Language:English<br>
Characters:Victor Frankenstein, Elizabeth Lavenza, William Frankenstein, Robert Walton, Henry Clerval<br> 
Setting:Geneva (Switzerland) <br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Ingolstadt (Germany)<br> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Orkney Islands,<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Scotland (United Kingdom)<br> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Ireland <br><br>
<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="frank.pdf">Frankenstein-Mary Shelley.pdf</a> <br> <br>
<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview17.php';" value="Read  Review">
</form>
</h3><BR><BR>
</h3><br><br>
<button class="button" onclick="goBack()">Back</button></font>
</body>
</html>
