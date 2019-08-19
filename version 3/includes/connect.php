<?php
	$username = 'root';
	$password = '';
	$host = 'localhost';
	$database_name = 'eedmo_database';
	
	date_default_timezone_set("Asia/Manila");
	
	$conn = mysqli_connect($host, $username, $password, $database_name); 
	if(!$conn){
		echo 'Error: connecting to database'.mysql_error();
	}
	
	$connect = mysqli_connect($host, $username, $password, $database_name); 
	if(!$connect){
		echo 'Error: connecting to database'.mysql_error();
	}
	
	
?>