<?php
session_start();

?>
<?php
if(isset($_REQUEST['forget']))
{  
$emp_pemail=$_POST['email'];
$query1="select * from emp_details where emp_pemail='$emp_pemail'";
$result1=mysqli_query($con, $query1);
$rows1=mysqli_num_rows($result1);
if($rows1>=1){
$x=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v",
"w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T",
"U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");
$emp_password="";
for($i=0;$i<=8;$i++){
$emp_password=$emp_password.$x[rand(0,count($x)-1)];
}	
$query2="UPDATE emp_details SET emp_pass='$emp_password' WHERE emp_pemail='$emp_pemail'";
mysqli_query($con,$query2);	
$_SESSION['msg']="Your password has been sent to your email";

}

}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>E-barristers</title>

<link rel="stylesheet" href="css/style.css" type="text/css" />
<style type="text/css">
.Forgot
{
	height:300px;
	width:400px;
	margin:50px auto;
	padding:20px;
	background-color:#D2E9FF;
	border-radius:10px;	
}
.Forgot form
{
	width:360px;
	text-align:center;
	margin:50px 0 0 0;
	font-size:12px;
}
.Forgot p
{
	height:250px;
	width:312px;
	font-size:15px;
	padding:0 30px 0 50px;
	margin:-160px 0 0 400px;
	position:absolute;
	text-align:justify;
	text-indent:15px;
	color:#666;
	font-style:italic;
	font-family:cookie;
	border-left:3px groove #FFF;
}

</style>
</head>
<body>
<div id="wrap">
<div id="content2">
<div class="Forgot">
<form name="frm" action="" method="post">
<h4>Please enter Email ID to receive password</h4>
<h5>
<?php if(isset($_SESSION['msg'])) {
echo "<font color='green'>".$_SESSION['msg']."</font>"; 
unset($_SESSION['msg']);}?>
</h5>
<div>Enter your email ID:<input type="email" name="email" style="width:190px; height:20px; border:1px solid #CCC; border-radius:5px; font-size:12px;" placeholder = "Enter Email Address" required></div><br />
<a href="Sign-in.php"><input type="button" value="Back" id="resub"/></a>
<input type="submit" name="forget" value="Submit" id="resub" />
</form>

</div>
</div>
</div>
</body>
</html>
