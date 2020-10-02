<?php
session_start();
$con=mysqli_connect("localhost","root","","ps") or die(mysqli_error($con));
$uname=$_POST['uname'];
$pwd=$_POST['password'];
$login="SELECT fname FROM signup WHERE BINARY uname='$uname' AND BINARY password='$pwd'";
$login_result=mysqli_query($con,$login) or die(mysqli_error($con));
if(mysqli_num_rows($login_result)==1){
	header('Location:main.php');
}
else{
	header('Location:login_failure.php');
}
$_SESSION["uname"]=$uname;
?>
