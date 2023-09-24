<?php 

error_reporting(0);

$servername="localhost";
$user="root";
$password="";
$dbname="1";

session_start();

$connect = mysqli_connect($servername,$user,$password,$dbname);

if($connect===false)
{
	die("connection error");
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=md5($_POST["password"]);

	$sql="SELECT * FROM register WHERE username='".$username."' AND password='".$password."' 
	";

	$result=mysqli_query($connect, $sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		header("location:index.php");

	}

	elseif($row["usertype"]=="admin")
	{

		header("location:admin.php");
	}
	
	else
	{
		echo "<script>alert('Account not Register Please Register Fisrt Thankyou')</script>";
		echo("<script>window.location = 'index.php';</script>");
	}
}

?>