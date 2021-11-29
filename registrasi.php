<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
	<div class="container col-md-6 mt-4">
		<h1>Registrasi Akun Baru</h1>
		<div class="card">
			<div class="card-header bg-dark text-white">
				Informasi
			</div>
			<!-- <div class="card-body">
				<form action="" method="post" role="form" enctype="multipart/form-data">
				<div class="form-group">
						<label>Foto</label>
						<input type="file" name="image" required="" class="form-control">
					</div> -->
					<form action="" method="post" role="form" enctype="multipart/form-data">
				<!-- <div class="form-group">
						<label>NISP</label>
						<input type="text" name="id" required="" class="form-control">
					</div> -->
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" required="" class="form-control">
					</div>	
			<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>
				<?php
				include('koneksi.php');
				$msg = "";
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					
					$name = $_POST['name'];
					$username = $_POST['username'];
					$password = $_POST['password'];
                    
					extract($_POST);
	
					$datas = mysqli_query($db, "insert into users (name,username,password,level)values('$name', '$username', '$password', '$level')") or die(mysqli_error($db));
					echo "<script>alert('data berhasil disimpan.');window.location='login.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	
</body>

</html>