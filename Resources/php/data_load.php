<?php
	require 'connection.php';
	session_start();
	function load(){
		$user_authentication_query="select user_id, fname, email from users where email='sreelakshmiajith95@gmail.com' and password='qwerty123'";
		$user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
		$rows_fetched=mysqli_num_rows($user_authentication_result);
		$row=mysqli_fetch_array($user_authentication_result);
		$_SESSION['testvar'] = $row['lname'];
	}
	
?>