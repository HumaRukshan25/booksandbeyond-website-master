<html>

<head>
	<title>SIGN UP!</title>
<script>

function chfn()
{
var fn=document.f1.fname.value;
var ln=document.f1.lname.value;
var us=document.f1.uid.value;
var pa=document.f1.psw.value;
var pa2=document.f1.psw2.value;
var abt=document.f1.abtyou.value;
var em=document.f1.email.value;
var cn=document.f1.cntct.value;
var ubday=document.f1.bday.value;
if(fn=="")
{
alert("Please enter your first name");
document.f1.fname.focus();
return false;
}

if(ln=="")
{
alert("Please enter your last name");
document.f1.lname.focus();
return false;
}

if(us=="")
{
alert("Please enter userid");
document.f1.uid.focus();
return false;
}
var unlen=fn.length;
var str=us.substr(0,unlen);
if(str!=fn)
{
alert("User Id should start with user's first name");
document.f1.uid.value="";
document.f1.uid.focus();
return false;
}
if(pa=="")
{
alert("Please enter password");
document.f1.psw.value="";

document.f1.psw.focus();
return false;
}
var de2=/[A-Z]/
if(!de2.test(pa))
{
alert("Password must have atleast 1 uppercase character");
document.f1.psw.value="";
document.f1.psw.focus();
return false;
}
var de=/[a-z]/
if(!de.test(pa))
{
alert("Password must have atleast 1 lowercase character");
document.f1.psw.value="";
document.f1.psw.focus();
return false;
}
var de1=/[0-9]/
if(!de1.test(pa))
{
alert("Password must have atleast 1 digit");
document.f1.psw.value="";
document.f1.psw.focus();
return false;
}
if(pa.length<8)
{
alert("Password should be atleast of 8 characters!");
document.f1.psw.value="";
document.f1.psw.focus();
return false;
}

if(pa2=="")
{
alert("Please confirm your password");
document.f1.psw2.focus();
return false;
}

if(pa!=pa2)
{
alert("Passwords do not match!");
document.f1.psw2.focus();
return false;
}
if(ubday=="")
{
alert("Please Enter Birthdate");
document.f1.bday.focus();
return false;
}
var currdate=new Date();
var curryr=currdate.getFullYear();
var bdate=new Date(ubday);
var birthyr=bdate.getFullYear();
var age=curryr-birthyr;
if(currdate<bdate)
{
alert("Today's date exceeded");
document.f1.bday.focus();
return false;
}
if(abt=="")
{
alert("Please enter some details for your profile");
document.f1.abtyou.focus();
return false;
}

if(em=="")
{
alert("Please enter your Email Id");
document.f1.email.focus();
return false;
}

if(cn=="")
{
alert("Please enter your contact no.");
document.f1.cntct.focus();
return false;
}

if(cn.length!=10)
{
alert("Contact no. should be of 10 digits!");
document.f1.cntct.value="";
document.f1.cntct.focus();
return false;
}
}</script>

<?php
if(isset($_POST["su"]))
{
$fna = $_POST["fname"];
$lna = $_POST["lname"];
$usid = $_POST["uid"];
$pass1 = $_POST["psw"];
$gen = $_POST["gender"];
$nat = $_POST["nations"];
$dob = $_POST["bday"];
$mail = $_POST["email"];
$con = $_POST["cntct"];
$pass2 = $_POST["psw2"];
 
$connec =mysqli_connect("localhost","root","","bb");
$que="select id from member";
$res=mysqli_query($connec,$que);

if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_assoc($res))
	{
		$temp=$row["id"];
		
		if($usid==$temp)
       		 { 
	       		echo '<script type="text/javascript">alert("User Id already exists")</script>';
		}	
	}			
}

		$query = "insert into member values ('$fna','$lna','$usid','$pass1','$gen','$nat','$dob','$mail',$con)";
		if(mysqli_query($connec,$query))
		{
		header('Location: login.php');  
		echo "Registration Successful!"; 
		}

}
?>
<script>
function goBack() {
    window.history.back();
}
</script>

<style>

 textarea {
    width: 30%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid black;
    border-radius: 4px;
    background-color: white;
    resize: none; }

.button {
    background-color: green;
    border: 1px solid black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
}
</style>

</head>

<body background=bg0.jpg> 
<font color=white>

<h1><center>BOOKS & BEYOND</center></h1>
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
  <li><a class="active" href="HOME.HTML" TARGET=_top >HOME</a></li>
  
  <li class="dropdown">
    <a href="AUTHORS1.HTML"  TARGET=_top  class="dropbtn">AUTHORS</a>
    <div class="dropdown-content">
      <a href="Chetan1.html">CHETAN BHAGAT</a>
      <a href="Durjoy1.html">DURJOY DATTA</a>
     <a href="Preeti1.html">PREETI SHENOY</a>
      <a href="Ravin1.html">RAVINDER SINGH</a>
      <a href="Sudeep1.html">SUDEEP NAGARKAR</a>
    </div>
  </li>
  

<li class="dropdown">
    <a href="tablesb.html" TARGET=_top class="dropbtn">GENRE</a>
    <div class="dropdown-content">
      <a href="mystpage1.html">MYSTERY THRILLER</a>
      <a href="horrorpage1.html">HORROR</a>
      <a href="romancepage1.html">ROMANCE</a>
     <a href="autob1.html">AUTOBIOGRAPHIES</a>
      </div>
</li>

<li><a class="active" href="contactus.html" TARGET=_top>ABOUT US!</a></li>
<li><a class="active" href="login.php" TARGET=_top>LOG IN</a></li>
<li><a class="active" href="signup.php" TARGET=_top>SIGN UP!</a></li>


</ul>



<center> <h1> SIGN UP! </h1> </center>
<center> <h3> Join and be our prestigious member!!! </h3> </center>




<form method=post action=signup.php  name=f1 onsubmit="return chfn()">

<center>First Name:<br>
	<input type="text" name="fname" autofocus size="25"> <br> <br></center>

<center>Last Name:<br>
	<input type="text" name="lname"  size="25"></center> <br> <br>

<center>User ID:<br>
        <input type="text" name="uid"  size="25"></center><br>
<br>
 
<center>Password:<br>
  <input type="password" name="psw"></center>
  <br><br>
<center>Confirm password:<br>
  <input type="password" name="psw2"></center>
<br><br>
 <center>Gender:<br>	
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other</center>
<br><br>

  <center>Nation:<br>
  <select name="nations">
    <option value="ind">
India</option>
    <option value="USA">USA</option>
<option value="UK">UK</option>
    <option value="SL">Sri Lanka</option>
    <option value="Pak">Pakistan</option>
  <option value="Mynmr">Myanmar</option>
<option value="arg">Argentina</option>
<option value="ger">Germany</option>
<option value="aus">Australia</option>
<option value="france">France</option>
<option value="brazil">Brazil</option>
  </select></center>
<br><br>


   <center>Birthday:<br>
 <input type="date" name="bday" min="1945-01-01" max="2016-12-31"></center>
  <br><br>

 <center>About you:<br>
 <textarea name="abtyou" rows="10" cols="25" maxlength="140">
</textarea></center> <br><br>

  <center>E-mail:<br>
  <input type="email" name="email"></center><br><br>
 
<center>Contact no.:<br>
 <input type="number" name="cntct"></center> <br> <br>

<center>
<input type="submit" class="button" value="Submit" name=su>
</center>
</form>
<BR><BR>
<button class="button" onclick="goBack()">Back</button>
</font>
</body>

</html>
