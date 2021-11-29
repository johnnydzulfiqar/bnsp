
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<?php include('menu_admin.php'); ?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 70px;
   	height: 75px;
   }
</style>
	<div class="container col-md-12 mt-4">
		<h1>Informasi akun pengguna</h1>
		<div class="card">
			<div class="card-header bg-dark text-white ">
			Informasi Akun
			
			</div>
	<form method="GET" action="admin_user.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
                            <th>Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
                            <th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php 
			//untuk meinclude kan koneksi
			include('koneksi.php');
			$no = 1;
				//jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['kata_cari'])) {
					//menampung variabel kata_cari dari form pencarian
					$kata_cari = $_GET['kata_cari'];

					//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
					//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
					$query = "SELECT * FROM users WHERE username like '%".$kata_cari."%' OR name like '%".$kata_cari."%' OR id like '%".$kata_cari."%' ORDER BY id ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM users ORDER BY id ASC";
				}
				

				$result = mysqli_query($db, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($db)." - ".mysqli_error($db));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) { 
				?>
				<tr>
						<td><?= $no; ?></td>
                        <td><?= $row['name']; ?></td>
						<td><?= $row['username']; //untuk menampilkan nama ?></td>
						<td><?= $row['password']; ?></td>
                        <td><?= $row['level']; ?></td>
						<td>
                        <div class="col">
								<a href="admin_hapus_users.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
						<?php $no++; } ?>
  								
					</tr>
						
			

</body>
</html>