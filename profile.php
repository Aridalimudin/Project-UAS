<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
		<?php
			require 'connection.php';
			session_start();
		
			if(!ISSET($_SESSION['user'])){
				header('location:login.php');
			}
		?>
		<div class="container">
			<div class="card">
				<div class="card-header">
					Pendaftaran Calon Pekerja
					<a href="index.php" class="btn btn-primary float-end ms-3">Home</a>
					<a href="logout.php" class="btn btn-success float-end">Logout</a>
				</div>
				<div class="card-body">
					<form action="profile_process.php" method="POST" class="row g-3">
						<input type="hidden" class="form-control" name="id" value="<?= $_SESSION['user']['id'] ?>">
						<div class="mb-3">
							
							<label for="formGroupExampleInput" class="form-label">Nama lengkap</label>
							<input type="text" class="form-control" name="name" id="formGroupExampleInput" value="<?= $_SESSION['user']['name'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputEmail4" class="form-label">Tempat</label>
							<input type="text" class="form-control" name="place_of_birth" id="inputEmail4" value="<?= $_SESSION['user']['place_of_birth'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputPassword4" class="form-label">Tanggal lahir</label>
							<input type="date" class="form-control" name="date_of_birth" id="inputPassword4" value="<?= $_SESSION['user']['date_of_birth'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputEmail4" class="form-label">Email</label>
							<input type="email" class="form-control" name="email" id="inputEmail4" value="<?= $_SESSION['user']['email'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputPassword4" class="form-label">No hp</label>
							<input type="text" class="form-control" name="phone_number" id="inputPassword4" value="<?= $_SESSION['user']['phone_number'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputEmail4" class="form-label">Pendidikan terakhir</label>
							<input type="text" class="form-control" name="school" id="inputEmail4" value="<?= $_SESSION['user']['school'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputPassword4" class="form-label">Jurusan</label>
							<input type="text" class="form-control" name="major" id="inputPassword4" value="<?= $_SESSION['user']['major'] ?>">
						</div>
						<div class="col-12">
							<label for="inputAddress2" class="form-label">Alamat lengkap</label>
							<input type="text" class="form-control" name="address" id="inputAddress2" value="<?= $_SESSION['user']['address'] ?>">
						</div>
						<div class="col-md-6">
							<label for="inputCity" class="form-label">Domisili</label>
							<input type="text" class="form-control" name="city" id="inputCity" value="<?= $_SESSION['user']['city'] ?>">
						</div>
						<div class="col-md-4">
							<label for="inputState" class="form-label">Posisi yang di lamar</label>
							<select id="inputState" name="position" class="form-select">
								<option  <?= $_SESSION['user']['position'] ? '' : 'selected'; ?> disabled>Choose...</option>
								<option <?= $_SESSION['user']['position'] === 'Operator produksi' ? 'selected' : ''; ?>>Operator produksi </option>
								<option <?= $_SESSION['user']['position'] === 'Staff produks' ? 'selected' : ''; ?>>Staff produksi </option>
								<option <?= $_SESSION['user']['position'] === 'Administrasi' ? 'selected' : ''; ?>>Administrasi</option>
								<option <?= $_SESSION['user']['position'] === 'Staff gudan' ? 'selected' : ''; ?>>Staff gudang </option>
							</select>
						</div>
						<fieldset class="row mb-3">
							<legend class="col-form-label col-sm-2 pt-0">Status dosis vaksinasi</legend>
								<div class="form-check">
									<input class="form-check-input"  type="radio" name="status" id="gridRadios1" value="Dosis 1" <?= $_SESSION['user']['status'] == 'Dosis 1' ? 'checked' : ''; ?>>
									<label class="form-check-label" for="gridRadios1">
									Dosis 1
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="status" id="gridRadios2" value="Dosis 2" <?= $_SESSION['user']['status'] == 'Dosis 2' ? 'checked' : ''; ?>>
									<label class="form-check-label" for="gridRadios2">
										Dosis 2
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="status" id="gridRadios3" value="Dosis 3 Booster" <?= $_SESSION['user']['status'] == 'Dosis 3 Booster' ? 'checked' : ''; ?>>
									<label class="form-check-label" for="gridRadios3">
										Dosis 3 booster
									</label>
								</div>
						</fieldset> 
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>