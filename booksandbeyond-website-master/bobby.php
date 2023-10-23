<html>
 <head>
 <title>BOBBY KENNEDY</title>

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
		$bookname = "bobby";
		if($rev!=NULL)
		{
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
<h1> <center>BOBBY KENNEDY<br>THE MAKING OF A LIBERAL ICON</center></h1>
<h2> <center>LARRY TYE</center></h2>
<p>

<img class="displayed" src="bobby.jpg" style=width:"10px" height:"10px";> 

<h3>
New York Times bestselling author of Satchel: The Life and Times of an American Legend Larry Tye was given unprecedented access by the Kennedy family to write this in-depth, vibrant and editorially independent biography.

History remembers Robert F. Kennedy as a racial healer, a tribune for the poor, and the last progressive knight. But Kennedy -nurtured on the rightist orthodoxies of his dynasty-building father-started his public life as counsel to the left-baiting, table-thumping Senator Joseph McCarthy.

A bare-knuckled political operative who masterminded his brother's whatever-it-takes bids for senator and president,< Kennedy okayed FBI wiretaps of Martin Luther King Jr. and cloak-and-dagger operations against communist Cuba that included blowing up railroad bridges, sabotaging crops, and plotting the elimination of President Fidel Castro.


Remembered now as a rare optimist in an age of political cynicism,RFK's profoundly moving journey from cold warrior to hot-blooded liberal also offers a lens into two of the most chaotic and confounding decades of twentieth century America.<br><br>

<b><font color=yellow>BOOK DETAILS:</font></b> <br>
Original Title:Bobby Kennedy: The Making of a Liberal Icon<br>
ISBN: 0812993349 (ISBN13: 9780812993349)<br>
Edition Language:English<br><br>

<b><font color=yellow>DOWNLOAD THE FREE PDF HERE!</font><b> <br>
<a href="bobby.pdf">Bobby Kennedy-The Making Of A Liberal Icon-Larry Tye.pdf</a> <br> <br>
</h3>

<b><font color=yellow>READER REVIEWS</font></b><br>
<form method=post name=f2 onsubmit="return write_review(this)">
Write Review:<br>
<textarea name="review"></textarea><br>
<input type="submit" class="button" value="Submit">

 <input type="button" class="button" onclick="location.href = 'readreview13.php';" value="Read  Review">
</form>
</h3><BR>
<button class="button" onclick="goBack()">Back</button></font>
</body>
</html>
