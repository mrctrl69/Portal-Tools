<?php

	include 'conn.php';
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nickname = $_POST['nickname'];
	
	$connect->query("INSERT INTO tb_users (email,password,nickname) VALUES (''".$email."','".$password."','".$nickname."')")

?>