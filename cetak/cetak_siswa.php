<!DOCTYPE html>
<html>
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
		<h1>Bukti Pendaftaran Calon Siswa</h1>
		<div class="card">
			<div class="card-header bg-dark text-white ">
			</div>
			<div class="card-body">
				<?php
				include('../koneksi.php');
				$id = $_GET['id'];
				$data = mysqli_query($db, "select * from siswa where id = '$id'");
				$row = mysqli_fetch_assoc($data);
				?>
				
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Foto</th>
							<th>Jenis Kelamin</th>
							<!-- <th>Tanggal Registrasi</th> -->
							<th>Alamat</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                    <td><?= $row['id'];?></td>
						<td><?= $row['name']; ?></td>
						<td><?php echo "<div id='img_div'>";
      							  echo "<img src='../img/".$row['image']."'>";?></td>
						<td><?= $row['jeniskelamin']; ?></td>
						<!-- <td><?= $row['tanggalLahir']; ?></td> -->
                        <td><?= $row['alamat']; ?></td>
						</tr>
			</div>
		</div>
	</div>
    
	<script>
		window.print();
	</script>
 
</body>

</html>