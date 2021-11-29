<!DOCTYPE html>
<html>
<?php include('menu_admin.php'); ?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
   img{
   	float: left;
   	margin: 5px;
   	width: 70px;
   	height: 75px;
   }
</style>
<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Edit Data Anggota</h1>
		<div class="card">
			<div class="card-header bg-dark text-white ">
				Edit Anggota
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; 
				$data = mysqli_query($db, "select * from siswa where id = '$id'");
				$row = mysqli_fetch_assoc($data);
				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">
				<div class="form-group">
						<label>Foto</label>
						<?php echo "<div id='img_div'> </div>" ; echo "<img src='img/".$row['image']. "'>";?>
					</div>
                </div>
                <div class="form-group">
						<label>NIS</label>
                        </div>
                <input type="text" disabled name="id" required="" value="<?= $row['id']; ?>">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" disabled name="name" required="" class="form-control" value="<?= $row['name']; ?>">
					</div>
					<div class="row form-group">
                    <div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" disabled name="name" required="" class="form-control" value="<?= $row['jeniskelamin']; ?>">
					</div>
              
            </div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" disabled name="tanggalLahir" class="form-control" value="<?= $row['tanggalLahir']; ?>">
					</div>
                    <div class="form-group">
						<label>Email</label>
						<input type="email" disabled name="email" class="form-control" value="<?= $row['email']; ?>">
					</div>
                    <div class="form-group">
						<label>alamat</label>
						<input type="text" disabled name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
					</div>
                    <div class="col-md-4">
                <select class="form-select" name="status" id="status">
                  <option value="-1">Plih Satu</option>
                  <option value="DITERIMA">DITERIMA</option>
                  <option value="CADANGAN">CADANGAN</option>
                  <option value="TIDAK DITERIMA">TIDAK DITERIMA</option>
                </select>
              </div>
            </div>
	<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>
				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
                     $status = $_POST['status'];
  	mysqli_query($db, $sql);
					//query mengubah barang
					mysqli_query($db, "update siswa set status='$status' where id ='$id'") or die(mysqli_error($koneksi));
					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='admin_info.php';</script>";
				}



				?>
			</div>
		</div>
	</div>
</body>

</html>