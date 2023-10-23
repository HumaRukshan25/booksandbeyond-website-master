<html>
 <head>
 <title>THE SHATTERED TREE</title>

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
		$bookname = "thetree";
		if($rev!=NULL)
		{
			$conn = mysqli_connect("localhost","root","","bb");
			$id = $_SESSION["uname"];
			$query = "insert into login_activity(userid,book_name,review,likes) values ('$id','$bookname','$rev',0)";
			$auto_id = mysqli_insert_id();
			if(mysqli_query($conn,$query))
			{
				echo "Review successfully submitted";
				header('Location: readreview25.php');  
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
<h1> <center>THE SHATTERED TREE</center></h1>
<h2> <center> CHARLES TODD </center></h2>
<p>

<img class="displayed" src="tree.jpg" style=width:"10px" height:"10px";> 

<h3>
World War I battlefield nurse Bess Crawford goes to dangerous lengths to investigate a wounded soldier's background<br> and uncover his true loyalties in this thrilling and atmospheric entry in the bestselling "vivid period mystery series"<br> (New York Times Book Review).

At the foot of a tree shattered by shelling and gunfire, stretcher-bearers find an<br> exhausted officer, shivering with cold and a loss of blood from several wounds. The soldier is brought to battlefield nurse<br> Bess Crawford's aid station, where she stabilizes him and treats his injuries before he is sent to a rear hospital. The odd<br> thing is, the officer isn't British--he's French. But in a moment of anger and stress, he shouts at Bess in German. 

When<br> Bess reports the incident to Matron, her superior offers a ready explanation. The soldier is from Alsace-Lorraine, a<br> province in the west where the tenuous border between France and Germany has continually shifted through history,<br> most recently in the Franco-Prussian War of 1870, won by the Germans. But is the wounded man Alsatian?And if he is,<br> on which side of the war do his sympathies really lie?

Of course, Matron could be right, but Bess remains uneasy—and<br> unconvinced. If he were a French soldier, what was he doing so far from his own lines . . .and so close to where the<br> Germans are putting up a fierce, last-ditch fight? 

When the French officer disappears in Paris, it's up to Bess—a<br> soldier's daughter as well as a nurse—to find out why, even at the risk of her own life. <br><br>

<b><font color=yellow>BOOK DETAILS:</font></b><br>
ISBN: 0062386271 (ISBN13: 9780062386274)<br>
Series: Bess Crawford #8<br><br>

<b><font color=yellow>PDF COMING SOON!</font><b> <br> <br>


<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview25.php';" value="Read  Review">
</form>
</h3><BR><BR>
</h3><BR><BR>
<button class="button" onclick="goBack()">Back</button>
</body>
</html>
