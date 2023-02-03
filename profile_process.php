<?php
	session_start();
	require_once 'connection.php';
 
	
	try{
		$id 		 					= $_POST['id'];
		$name 		 					= $_POST['name'];
		$place_of_birth 		= $_POST['place_of_birth'];
		$date_of_birth 		 	= $_POST['date_of_birth'];
		$phone_number 		 	= $_POST['phone_number'];
		$school 		 				= $_POST['school'];
		$major 		 					= $_POST['major'];
		$address 		 				= $_POST['address'];
		$city 		 					= $_POST['city'];
		$position 		 			= $_POST['position'];
		$status 		 				= $_POST['status'];
		$email  	 					= $_POST['email'];
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE `users` SET 
				`name` = '$name', 
				`email` = '$email', 
				`place_of_birth` = '$place_of_birth',
				`date_of_birth` = '$date_of_birth',
				`phone_number` = '$phone_number',
				`school` = '$school',
				`major` = '$major',
				`address` = '$address',
				`city` = '$city',
				`position` = '$position',
				`status` = '$status'
				 WHERE id = '$id'";
		$conn->exec($sql);
		$sql = "SELECT * FROM `users` WHERE `id`='$id'";
		$query = $conn->prepare($sql);
		$query->execute();
		$fetch = $query->fetch();
		$_SESSION['user'] = $fetch;
	}catch(PDOException $e){
		echo $e->getMessage();
		return false;
	}
	$conn = null;
	header('location:profile.php');
	
?>