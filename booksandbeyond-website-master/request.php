<html>
 <head>
 <title>IT STARTED WITH A FRIEND REQUEST</title>
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
		$bookname = "it started with a friend request";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview9.php');  
			}
		}
	
		else
		{
			echo "Enter Review";
		}
			
		?>
}
</script><script>
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
<h1> <center>IT STARTED WITH A FRIEND REQUEST </center></h1>
<h2> <center>SUDEEP NAGARKAR </center></h2>
<p>

<img class="displayed" src="request.jpg" style=width:"10px" height:"10px";> 

<h3>
A brand new love story and a story of friendship from the bestselling author of Few Things Left Unsaid and That’s the Way We Met! It will take every emotions to one step higher.
Why don’t we feel the moment when we fall in love but always remember when it ends? Akash is young, single, and conservative with a preference for girls with brains than in miniskirts. One day, he runs into free-spirited Aleesha at a local discotheque. A Mass Media student, Aleesha is a pampered brat, the only child of her parents who dote on her. This brief meeting leads them to exchange their BlackBerry pins and they begin chatting regularly. As BlackBerry plays cupid, they fall in love. When they hit a rough patch in their life, Aditya, Akash’s close pal, guides them through it.
But just when they are about to take their relationship to the next level, a sudden misfortune strikes. Can Aditya bring Akash’s derailed life back on track?<br><br>

It Started with a Friend Request is a true story which will make you believe in love like you never knew before.<br><br>

<b><font color=yellow>BOOK DETAILS:</font></b><br>
<b>Original Title:</b>It Started With A Friend Request<br>
<b>ISBN:</b>139788184004205<br>
<b>Edition Language:</b>English<br><br>

<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="request.pdf">It Started With A Friend Request-Sudeep Nagarkar.pdf</a> <br> <br>

<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">
<!-- <input type="button" value="Write Review"> -->
 <input type="button" class="button" onclick="location.href = 'readreview9.php';" value="Read  Review">
<br><button class="button" onclick="goBack()">Back</button>
</form>

</h3></font>
</body>
</html>
