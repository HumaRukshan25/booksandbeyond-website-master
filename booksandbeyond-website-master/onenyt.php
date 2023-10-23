<html>
 <head>
 <title>ONE NIGHT @ THE CALL CENTER</title>
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
		$bookname = "one_night";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview2.php');  
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
	
<style> body {   text-align: justify; }

img.displayed {
    display: block;
    margin-left: auto;
    margin-right: 100}
img {
    float: right;
    margin: 0 0 10px 10px;
}
a {
    color: white;
}a:hover, a:active,button:hover{
    background-color: green;
}
</style><style>
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
<h1> <center>ONE NIGHT @ THE CALL CENTER  </center></h1>
<h2> <center> CHETAN BHAGAT </center></h2>
<p>

<img class="displayed" src="onenight.jpg" style=width:"10px" height:"10px";> 


<h3>
Six friends work nights at a call center in India, providing technical support for a major U.S. appliance corporation. Skilled in patience and accent management they help American consumers keep their lives running. Yet behind the headsets, everybody's heart is on the line.

Shyam (Sam to his callers) has lost his self-confidence after being dumped by the girl who just so happens to be sitting next to him. Priyanka's domineering mother has arranged for her daughter's upscale marriage to an Indian man in Seattle. Esha longs to be a model but discovers it's a horizontal romp to the runway.Lost, dissatisfied Vroom has high ideals, but compromises them by talking on the phone to idiots each night. Traditional Radhika has just found out that her husband is sleeping with his secretary. And Military Uncle (nobody knows his real name) sits alone working the online chat.

They all try to make it through their shifts and maintain their sanity under the eagle eye of a boss whose ego rivals his incompetence. But tonight is no ordinary night. Tonight is Thanksgiving in America: Appliances are going haywire, and the phones are ringing off their hooks. Then one call, from one very special caller, changes everything.<br><br>

Chetan Bhagat's delicious romantic comedy takes us inside the world of the international call center, where cultural cross-wires come together with perfect pathos, hilarity, and spice.<br><br>

<b><font color=yellow>BOOK DETAILS:</font></b> <br>
<b>Original Title:</b>One Night @ The Call Center<br>
<b>ISBN :</b>0345498321 (ISBN13: 9780345498328)<br>
<b>Edition Language: </b>English<br>
<b>URL:</b>http://www.chetanbhagat.com/books/ontcc/<br>
<b>Characters:</b>Shyam, Priyanka, Esha, Vroom, Radhika, Military Uncle, GOD's voice<br>
<b>Setting:</b>Gurgaon (India) 
Haryana (India) <br><br>

<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="onenyt.pdf">One Night @ The Call Center-Chetan Bhagat.pdf</a> <br> <br>


<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview2.php';" value="Read  Review">
</form>
</h3><BR><BR>
<button class="button" onclick="goBack()">Back</button></font>
</body>
</html>
