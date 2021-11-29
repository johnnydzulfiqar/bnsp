
<!DOCTYPE html>
<html>
<head>
 <style>
 body {
    background-image: url("./img/back.jpg");
    background-color: grey;
    font-family: 'Arial', 'Calibri', sans-serif;
}
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
    align-items: center;
}
.judul{
    color: black;
    font-weight: lighter;
}
.card{
    background-color: white;
    padding: 20px;
    width: 350px;
    margin: 20px;
    border-radius: 5px;
}
.form-group{
    display: flex;
    flex-direction: column;
    margin-bottom: 15px; 
}
label{
    margin-bottom: 7px;
}
.tombol{
    padding: 10px;
    background-color: green;
    color: white;
    border: none;
}
input{
    padding: 10px;
}
 </style>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 align="center">Pendaftaran Siswa</h1>
<hr>
<form action="cek_login.php" method="post">
<body>
    <div class="container">
        <h1 class="judul">Sign in to your account</h1>
        <div class="card">
            <form action="">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                </div>
                <input class="btn btn-primary"  type="submit" value="login" required>
            </form> 
        </div> <!-- End card-->
        <div class="card">
            <p>
                New User? <a href="registrasi.php">Create New Account</a>
            </p>
        </div>
    </div> <!-- End .container-->
 
 </td>
</tr>
</table>
</form>
</body>
</html>