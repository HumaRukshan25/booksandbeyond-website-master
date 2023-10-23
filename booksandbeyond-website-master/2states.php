<html>
 <head>
 <title>2STATES</title>

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
}
</style><script>
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
		$bookname = "2states";
		if(isset($_POST["su"]))
		{	if($rev!=NULL){
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview13.php');  
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



body {   text-align: justify; }

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


<h1> <center>2 STATES </center></h1>
<h2> <center> CHETAN BHAGAT </center></h2>
<p>

<img class="displayed" src="2states.jpg" style=width:"10px" height:"10px";> 



<h3>
Love marriages around the world are simple:Boy loves girl. Girl loves boy. They get married.In India, there are a<br> few more steps: Boy loves Girl. Girl loves Boy. Girl's family has to love boy.Boy's family has to love girl. Girl's<br>  family has to love Boy's Family. Boy's family has to love girl's family. Girl and Boy still love each other. They get<br>  married.Welcome to 2 States, a story about Krish and Ananya. They are from two different states of India, deeply in<br>  love and want to get married.Of course, their parents don t agrees.To convert their love story into a love marriage,<br> the couple have a tough battle in front of them.For it is easy to fight and rebel, but it is much harder to convince.<br>Will they make it?<br><br> From the author of blockbusters Five Point Someone, One Night @ the Call Center<br> and The 3 Mistakes of My Life,comes another witty tale about inter-community marriages in modern india.<br><br>

<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title: Two States <br>
ISBN: 8129115301 (ISBN13: 9788129115300)<br>
Edition Language: English<br>
URL: http://www.chetanbhagat.com/books/2_states/ <br>
Characters: Krish, Ananya <br>
Setting :Ahmedabad (India) <br>
		 New Delhi (India)  <br>
		 Chennai (India) 
<br><br>

<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="2states.pdf">2 States-Chetan Bhagat.pdf</a> <br> <br>


<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit" name = su>
<!-- <input type="button" value="Write Review"> -->
 <input type="button" class="button" onclick="location.href = 'readreview13.php';" value="Read  Review">
</form>
</h3>
</div>

<br><br>
<button class="button" onclick="goBack()">Back</button> </font>
</body>
</html>
