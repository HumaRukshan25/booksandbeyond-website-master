<html>
<head></style><script>
function goBack() {
    window.history.back();
}
</script><style>
a {
    color: white;
}a:hover, a:active,button:hover{
    background-color: green;
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
<center><table style = "color:white;" >
	<?php
	session_start();
	if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
	$res = $_SESSION["uname"];
	$con = mysqli_connect("localhost","root","","bb");
	$query = "select * from member where id = '$res'";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
			echo"<tr><td>FIRST NAME:</td><td>".$row["fname"]."</td></tr>
			<tr><td>LAST NAME:</td><td>".$row["lname"]."</td></tr>
			<tr><td>USER ID:</td><td>".$row["id"]."</td></tr>
			<tr><td>PASSWORD:</td><td>".$row["password"]."</td></tr>
			<tr><td>GENDER:</td><td>".$row["gender"]."</td></tr>
			<tr><td>COUNTRY:</td><td>".$row["country"]."</td></tr>
	`		<tr><td>DATE OF BIRTH:</td><td>".$row["date_of_birth"]."</td></tr>
			<tr><td>EMAIL ID:</td><td>".$row["email"]."</td>
			<tr><td>CONTACT NUMBER:</td><td>".$row["contact"]."</td></tr>";
			}
		}
	?>
<br><br><br>
</table>
<h2>ACCOUNT ACTIVITY</h2>
<table style = "color:white;">
	<tr><td>BOOK NAME </td><td>REVIEW </td><td>LIKES </td></tr>
	<br>
	<?php
	$quer ="select book_name,review,likes from login_activity where userid = '$res'";
	$result = mysqli_query($con,$quer);
	if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
			echo"<tr><td>".$row["book_name"]."</td><td>".$row["review"]."</td><td>".$row["likes"]."</td></tr>";
			}
		}
		else
		{
			echo "No account activity yet";
		}
	?>
</table><br><br>
<button class="button" onclick="goBack()">Back</button></body>
</html>
</body>
</html>

