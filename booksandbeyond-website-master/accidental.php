<html>
 <head>
 <title>THE ACCIDENTAL APPRENTICE </title><style>
 
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
    color: white;
}
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
function goBack() {
    window.history.back();
}</script>
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
		$bookname = "accidental apprentice";
		if(isset($_POST["su"]))
		{	if($rev!=NULL){
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview1.php');  
			}
			}

		else
		{
			echo '<script type="text/javascript">alert("Write Review")</script>';
		}
		}	
		?>
}
</script>	

</head>

<body background=bg0.jpg >
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

<h1> <center> THE ACCIDENTAL APPRENTICE </center></h1>
<h2> <center> VIKAS SWARUP </center></h2>
<p>

<img class="displayed" src="acc.jpg" style=width:"10px" height:"10px";> 


<h3>
This new novel by Vikas Swarup is a definite page-turner. As you get into it, you are introduced to Sapna, a young girl who works hard in an electronics store  to make ends meet, dealing with bad bosses and creepy Delhi boys who letch and try to proposition her often enough.

After the death of her father, Sapna is compelled to become the sole breadwinner for her family comprising her mother who is weighed down by multiple illnesses and her sister who has her head in the clouds and dreams of being a celebrity. 

As it happens, Sapna meets a billionaire industrialist who tells her he wants her to become CEO of his company, if she passes seven tests of life. Sceptical at first, Sapna is forced to take up his offer when things begin to fall apart at home. Here begins the tale of mayhem as all of a sudden things begin to happen to her,that she least expected, and you find out how she deals with them.

All through you wonder if these are really circumstances of fate  or is the billionaire Vinay Mohan Acharya orchestrating events to unfold in a manner of his choosing. The book, though not pointingly, touches upon many social evils that still exist in India. One hopes that in his own subtle manner Vikas has tried to bring these problems to light and that the people who read the book will not forget these matters once they put the book away.

Through this tale, Vikas allows us to get intimate with the main characters,learning little things about them and allowing us to be closely involved in their journey through this book. Parts of the book will make you cry with Sapna and her family,others will make you want to scream out loud at the attitudes of others. The book builds up nicely, with Sapna's tests becoming more and more personal and harder to separate from, and climaxes with an unexpected ending.<br><br> 
</p>

<b><font color=yellow>BOOK DETAILS:</font></b> <br>
<b> Original Title:</b> The Accidental Apprentice <br>
<b>ISBN:</b>1471113175 (ISBN13: 9781471113178)<br>
<b>Edition Language:</b>English<br>
<b>URL:</b> http://www.vikasswarup.net<br>
<b>Characters:</b> Sapna Sinha, Vinay Mohan Acharya, Neha Sinha, Alka Sinha, Karam Karak<br>
<b>Setting:</b> Delhi (India) <br><br> 

<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="accidental.pdf">The Accidental Apprentice-Vikas Swarup.pdf</a> <br> <br>


<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit" name = su>
<!-- <input type="button" value="Write Review"> -->
 <input type="button" class="button" onclick="location.href = 'readreview1.php';" value="Read  Review">
</form>
</h3><BR><BR>
<button class="button" onclick="goBack()">Back</button>
<font>
</body>

</html>
