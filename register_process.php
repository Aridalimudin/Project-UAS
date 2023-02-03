<?php
	session_start();
	require_once 'connection.php';
 
	if($_POST['password'] !== $_POST['konfirmasi_password']){
		header('location:login.php');
		return false;
	}
	if($_POST['name'] != "" || $_POST['email'] != ""){
		try{
			$name 		 = $_POST['name'];
			$email  	 = $_POST['email'];
			$password  = $_POST['password'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
		$conn = null;
		header('location:login.php');
	}else{
		echo "
			<script>alert('Harap isi dengan benar')</script>
			<script>window.location = 'login.php'</script>
		";
	}
?>