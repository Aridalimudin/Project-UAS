<?php
	session_start();
 
	require_once 'connection.php';
 
	if($_POST['email'] != "" && $_POST['password'] != ""){
		$email = addslashes($_POST['email']);
		$password = addslashes($_POST['password']);
		$sql = "SELECT * FROM `users` WHERE `email`=? AND `password`=? ";
		$query = $conn->prepare($sql);
		$query->execute(array($email,$password));
		$row = $query->rowCount();
		$fetch = $query->fetch();
		if($row > 0) {
			$_SESSION['user'] = $fetch;
			header("location: profile.php");
		} else{
			echo "
			<script>alert('Invalid username or password')</script>
			<script>window.location = 'index.php'</script>
			";
		}
	}else{
		echo "
			<script>alert('Please complete the required field!')</script>
			<script>window.location = 'index.php'</script>
		";
	}
?>