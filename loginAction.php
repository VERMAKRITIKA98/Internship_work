<?php 
include ('files/db.php');
if(!isset($_POST['submit']))
{
	echo "invalid";
	exit();
}
$user=$_POST['username'];
$password=$_POST['password'];
$query = "SELECT * FROM user WHERE user='$user' AND password ='$password'";
$result =mysqli_query($conn, $query);
$rows= mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
$_SESSION['name']=$data['name'];
$_SESSION['role']=$data['role'];
echo $_SESSION['role'];

?>