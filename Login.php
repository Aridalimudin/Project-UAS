<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT DEWASUTRATEX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.php">PT DEWASUTRATEX</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="galerry.php">GALLERY</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li class="active"><a href="Login.php">LOGIN</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Contact</p>
		</div>
	</section>

<!-- login -->

<div class="wrapper">
	<div class="title-text">
	   <div class="title login">Form Login</div>
	   <div class="title signup">Form Registrasi</div>
	</div>
	<div class="form-container">
	   <div class="slide-controls">
		  <input type="radio" name="slide" id="login" checked>
		  <input type="radio" name="slide" id="signup">
		  <label for="login" class="slide login">Login</label>
		  <label for="signup" class="slide signup">Registrasi</label>
		  <div class="slider-tab"></div>
	   </div>
	   <div class="form-inner">
			<form action="login_process.php" method="POST" class="login" onSubmit="validasi()">
			 <div class="field">
				<input type="text" id="email" name="email" placeholder="Masukan Email" autocomplete="off">
			 </div>
			 <div class="field">
				<input type="password" id="password" name="password" placeholder="Masukan Password" autocomplete="off">
			 </div>
			 <div class="field btn">
				<div class="btn-layer"></div>
				<input type="submit" value="Login">
			 </div>
			 <div class="signup-link">
				Belum Punya Akun? <a href="">Daftar Sekarang</a>
			 </div>
		  </form>
		  <form action="register_process.php" method="POST" class="signup" onSubmit="register()">
			<div class="field">
				<input type="text"  id="name" name="name" placeholder="Masukan Nama">
			 </div>
			 <div class="field">
				<input type="text"  id="email1" name="email" placeholder="Masukan Email">
			 </div>
			 <div class="field">
				<input type="password" id="password1" name="password" placeholder="Masukan Password">
			 </div>
			 <div class="field">
				<input type="password" id="conpassword" name="konfirmasi_password" placeholder="Konfirmasi password" required>
			 </div>
			 <div class="field btn">
				<div class="btn-layer"></div>
				<input type="submit" value="Daftar">
			 </div>
		  </form>
	   </div>
	</div>
 </div>
 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script>
	const loginText = document.querySelector(".title-text .login");
	const loginForm = document.querySelector("form.login");
	const loginBtn = document.querySelector("label.login");
	const signupBtn = document.querySelector("label.signup");
	const signupLink = document.querySelector("form .signup-link a");
	signupBtn.onclick = (()=>{
	  loginForm.style.marginLeft = "-50%";
	  loginText.style.marginLeft = "-50%";
	});
	loginBtn.onclick = (()=>{
	  loginForm.style.marginLeft = "0%";
	  loginText.style.marginLeft = "0%";
	});
	signupLink.onclick = (()=>{
	  signupBtn.click();
	  return false;
	});
</script>
 <script type="text/javascript">
		function validasi() {
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			if (email != "" && password!="" ) {
				alert('Selamat Kamu Berhasil Login!')
			}else{
				alert('Anda harus mengisi data dengan lengkap !');
			}
		}

		function register() {
			var name = document.getElementById("name").value;
			var email = document.getElementById("email1").value;
			var password = document.getElementById("password1").value;
			var conpassword = document.getElementById("conpassword").value;
			if(password !== conpassword){
				alert('Password Tidak sesuai');
				return false;
			}
			if (email != "" && password!="" && conpassword!="" && name != "") {
				alert('Selamat Kamu Berhasil Mendaftar!')
			}else{
				alert('Anda harus mengisi data dengan lengkap !');
			}
	}
	</script>
</body>
</html>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>@Copyright 21552011460_Arid alimudin_TIF RM21_UASWEB1.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>