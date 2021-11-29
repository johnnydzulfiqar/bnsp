<?php
session_start();
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
if($login == 1)
{ include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Login Pendaftaran Online</title>
 <style>
 body { font-family: verdana; font-size: 12px; }
 a { text-decoration: none; color: blue; }
 a:hover { color: green; }
 </style>
</head>
<body>
<h1 align="center">Selamat Datang Di Website Pendaftaran Online Silahkan Gunakan Menu Di Navbar</h1>
<hr>
<?php 
$level = $_SESSION['level'];
if($level == 1) { include "menu_admin.php"; }
if($level == 0) { include "menu_siswa.php"; }
?>
<hr>
<?php 
$nama     = $_SESSION['nama'];
$username = $_SESSION['username'];

echo "Selamat Datang $nama ($username) ";
?>
<hr>
</body>
</html>
<?php
}
}
else {
 include "login.php";
}

?>