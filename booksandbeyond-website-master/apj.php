<html>
 <head>
 <title>MY JOURNEY</title>
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
		$bookname = "my journey";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview12.php');  
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

body {   text-align: justify; }

img.displayed {
    display: block;
    margin-left: auto;
    margin-right: 100}
	
img {
    float: right;
    margin: 0 0 10px 10px;
}

a { color: WHITE;}


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

<h1> <center>MY JOURNEY-TRANSFORMING DREAMS INTO ACTIONS </center></h1>
<h2> <center>A.P.J ABDUL KALAM </center></h2>
<p>

<img class="displayed" src="apj.jpg" style=width:"10px" height:"10px";> 

<h3>
From a small boy growing up in Rameswaram, to becoming the country's eleventh President,A.P.J. Abdul Kalam?s life has been a tale of extraordinary determination,courage, perseverance and the desire to excel. In this series of anecdotes and profiles, Dr Kalam looks back on key moments in his past-some small and some momentous,<br>and tells the reader how each of them inspired him profoundly. With warmth and affection, he talks about the people who left a deep impression on him as he was growing up<br> and as an adult, and the lessons he drew from his interactions with them. He describes those who have been the closest to him-his father with his deep love of God, his mother and her great kindness, his mentors who helped shape his thoughts and outlook.There are heart-warming accounts here of his childhood years spent in a small town by the Bay of Bengal and the many struggles and sacrifices made on the path to becoming a scientist and then the President of India. Dr Kalam also writes about the times when failure and dejection nearly overtook him and how he prevailed over those obstacles by drawing strength from books and spirituality.
Nostalgic, honest, and deeply personal, My Journey is the story of a life as rich as it is.
-unusual and the beautiful lessons to be learnt from it.<br><br>

<b><font color=yellow>BOOK DETAILS:</font></b> <br>
<b>Original Title:</b>My Journey:Transforming Dreams into Actions<br>
<b>ISBN:</b> 8129124912 (ISBN13: 9788129124913)<br>
<b>Edition Language:</b>English<br><br>
<b><font color=yellow>PDF COMING SOON!</font><b> <br><BR>

<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">
<!-- <input type="button" value="Write Review"> -->
 <input type="button" class="button" onclick="location.href = 'readreview12.php';" value="Read  Review">
<BR><BR>
<button class="button" onclick="goBack()">Back</button>
</form>
</h3></font>
</body>
</html>
