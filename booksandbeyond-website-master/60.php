<html>
 <head>
 <title>60 MINUTES</title>
<script>
function write_review(f1)
{
	

		<?php
		session_start();
		if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: readreview3.php");
	    	exit;
		}
		$rev = $_POST["review"];
		$bookname = "60 MINUTES";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview3.php');  
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
<style>
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
	
	body {   text-align: justify; }

}
</style>
</head>

<body background=bg0.jpg>


	<font color=WHITE>
	<h1 style="font-family:Times New Roman ;font size:24px"><center>BOOKS & BEYOND</center></h1>
	<h3><center>REDEFINING READING</center></h3>
<hr>

<style>
body {   text-align: justify; }

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

<h1> <center>60 MINUTES </center></h1>
<h2> <center> UPENDRA NAMBURI </center></h2>
<p>

<img class="displayed" src="60.jpg" style=width:"10px" height:"10px";> 

<h3>
As the chief marketing officer of one of the biggest FMCG companies Agastya is all set for the most important product<br> launch of his career when things spin out of control. 
60 minutes is all he has to save his job and his marriage.
Beautiful<br> and intelligent, Maithili has never had much luck in love. When Agastya takes things too far and almost crushes her<br> spirit, Maithili must avenge herself. 60 minutes is all she needs to turn his life upside down.

Sailesh's academic<br> temperament is unsuited to corporate rivalry and subterfuge  but he is forced to retaliate when someone crosses the<br> line.He has 60 minutes to destroy his foe.

High profile jobs, reputations, relationships and marriages are at stake. As the<br> battle for supremacy continues, who will falter, who will persist and who will come out on top?<br>
A one of a kind thriller where all the action unfolds in 60 Minutes <br><br>


<b><font color=yellow>BOOK DETAILS:</font></b> <br>
<b>Original Title:</b>60 Minutes<br>
<b>ISBN:</b> 9384030244 (ISBN13: 9789384030247)<br>
<b>Edition Language:</b>English<br><br>
<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="60.pdf">60 Minutes-Upendra Namburi.pdf</a> <br> <br>

<b><font color=yellow>READER REVIEWS</font></b><br>
<!-- To see what other readers thought of this book, please <a href="signup.html">sign up</a> -->
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">
<!-- <input type="button" class="button" value="Write Review"> -->
 <input type="button" class="button" onclick="location.href = 'readreview3.php';" value="Read  Review">
<BR><BR>
<button class="button" onclick="goBack()">Back</button>
</form>
</font>
</body>
</html>
