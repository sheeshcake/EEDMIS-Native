<?php
	include "connect.php";
	session_start();
	if(isset($_POST["submit"])){
		$query = "INSERT INTO users (firstname,lastname,username,password) values('". $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_SESSION["username"] . "','" . $_SESSION["password"] . "')";
		if(mysqli_query($conn,$query)){
			header("Location: index.php");
		}
		else{
			echo "<script>alert('An Error Occured!');</script>";
		}
	}
?>