<html><head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"><script>
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
<?php
	session_start();
	if (!isset($_SESSION["is_auth"])) 
		{
	   	 header("location: login.php");
	    	exit;
		}
	$bookname = "60 MINUTES";
	$con = mysqli_connect("localhost","root","","bb");
	$id = $_SESSION["uname"];
?>	
<table border =1 style = "color:white;">
	<tr><td>Username</td><td>Review</td><td>Like the review</td></tr>
	<?php
	$con = mysqli_connect("localhost","root","","bb");
	$quer ="select Sr_no,userid,review from login_activity where book_name = '$bookname'";
	$result = mysqli_query($con,$quer);
	if(mysqli_num_rows($result)>0)
	{
	while($row = mysqli_fetch_assoc($result))
	{
		
		echo"<tr>".
                           	"<td>".$row["userid"]."</td>".
		"<td>".$row["review"]."</td>".
	                '<td><a href = "like3.php? x='.$row["Sr_no"].'"><i class="fa fa-thumbs-up" style="font-size:36px;color:white"></i></a></td>'."</tr>";
	}
	}
	else
	{
		echo "Be the first to review";
	}
	?>
</table><br><br>
<button class="button" onclick="goBack()">Back</button>
</body>
</html>