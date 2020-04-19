<?php
session_start();
if (!isset($_SESSION["uname"])) {
    header('location:index.php');
  }
if (isset($_POST['liked'])) {
		$friend=$_SESSION["friend"];
		$result = mysqli_query($con, "SELECT * FROM post WHERE uname=$friend");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO likes(uname, friend) VALUES (1, $friend)");
		mysqli_query($con, "UPDATE post SET likes=$n+1 WHERE uname=$friend");

		echo $n+1;
		exit();
	}
?>
