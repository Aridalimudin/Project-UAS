<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT DEWASUTRATEX</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
<?php
			require 'connection.php';
			session_start();
	
		?>
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
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="galerry.php">GALLERY</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<?php if(!empty($_SESSION['user'])){?>
					<li><a href="profile.php">PROFIL</a></li>
				<?php }else{ ?>
					<li><a href="login.php">LOGIN</a></li>
				<?php } ?>

			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>WELCOME TO MY WEBSITE</h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>PT. Dewasutratex adalah salah satu perusahaan manufaktur dan pengekspor tekstil terkemuka di Indonesia yang berlokasi di Kota Cimahi. PT. Dewasutratex merupakan perusahaan yang terintegrasi di bidang tekstil meliputi Spinning, Weaving, Knitting, Dyeing, dan Printing. Salah satu visi PT. Dewasutratex adalah menjadi perusahaan kelas dunia yang memberikan material tekstil berkualitas untuk memenuhi pasar domestik maupun global.</p>
		</div>
	</section>

	<!-- gallery -->
	<section class="service">
		<div class="container">
			<h3>GALLERY</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fa-solid fa-industry"></i></div>
					<h4>SPINNING</h4>
					<p>Spinning department converts rayon viscoseviscose to the more sustainable Tencel fibre.</p>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-globe"></i></div>
					<h4>TEXTURIZING</h4>
					<p>The art of altering the nature and appearance of POY filaments to achieve a more 'nature' feel.</p>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-edit"></i></div>
					<h4>TWISTING</h4>
					<p>Production high twist and medium twist goods.</p>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-chart-bar"></i></div>
					<h4>WEAVING</h4>
					<p>The three main categories are polyester, high twisting chiffon, and sateen.</p>
				</div>
			</div>
		</div>
	</section>


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