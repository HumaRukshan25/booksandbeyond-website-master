<html>
 <head>
 <title>MEIN KAMPF</title>

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
		$bookname = "hitler";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview19.php');  
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
<h1> <center>MEIN KAMPF </center></h1>
<h2> <center>ADOLF HITLER </center></h2>
<p>

<img class="displayed" src="hitler.jpg" style=width:"10px" height:"10px";> 

<h3>
Madman, tyrant, animal- history has given Adolf Hitler many names.
 In Mein Kampf (My Struggle), often called the Nazi bible, Hitler describes his life,
  frustrations, ideals, and dreams. Born to an impoverished couple in a small town in Austria,
   the young Adolf grew up with the fervent desire to become a painter.
    The death of his parents and outright rejection from art schools in Vienna
     forced him into underpaid work as a labourer.
     During the First World War, Hitler served in the infantry and was decorated for bravery.
      After the war, he became actively involved with socialist political groups
       and quickly rose to power, establishing himself as Chairman of the National Socialist German Worker's party.
       In 1924, Hitler led a coalition of nationalist groups in a bid to overthrow the Bavarian government
        in Munich. The infamous Munich "Beer-hall putsch" was unsuccessful, and Hitler was arrested.
         During the nine months he was in prison, an embittered and frustrated Hitler dictated
          a personal manifesto to his loyal follower Rudolph Hess. He vented his sentiments against
           communism and the Jewish people in this document, which was to become Mein Kampf,
            the controversial book that is seen as the blue-print for Hitler's political and military campaign.
            
             In Mein Kampf, Hitler describes his strategy for rebuilding Germany and conquering Europe.
              It is a glimpse into the mind of a man who destabilized world peace and pursued the genocide now known as the Holocaust.
               "... I believe today that my conduct is in accordance with the will of the Almighty Creator. In standing guard against the Jew I am defending the handiwork of the Lord" <br><br>

<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title:Mein Kampf<br>
ISBN:0395083621 (ISBN13: 9780395083628)<br>
Edition Language:English<br>
URL:http://www.hitler.org/writings/Mein_Kampf/<br><br>


</h3><br><br>
<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="meinkampf.pdf">Mein Kampf-Adolf Hitler.pdf</a> <br> <br>

<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview19.php';" value="Read  Review">
</form>
</h3><BR><BR>
<button class="button" onclick="goBack()">Back</button></font>
</body>
</html>
