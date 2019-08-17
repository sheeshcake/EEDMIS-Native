<?php

	require "connect.php";
	
	echo "<script>alert('" . $_POST["username"] . " " . $_POST["password"] . "');</script>";
    if(isset($_POST["username"]) && isset($_POST["password"])){
            $sql = "SELECT * FROM users WHERE username='" . $_POST["username"]. "' AND password='" . $_POST["password"] . "'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){
            	header("Location: home-admin.php");
            }

    }


?>