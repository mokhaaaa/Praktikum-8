<?php
// Koneksi ke database
$host = "localhost:3307";
$username = "root";
$password = "";
$database = "latihan";

    $koneksi = mysqli_connect($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Proses login
if (isset($_POST['submit'])) {
    $email = $_POST['username'];
    $passworduser = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$passworduser'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        // Login berhasil, redirect ke program form peserta pendidikan
        header('Location: formulirpd1.php');
        exit;
    } else {
        // Login gagal
        echo "<script>alert('Email atau password salah.');
                      window.location.href = 'index.php'; 
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>LOGIN</title>
</head>
<body>
    <section>
        <!--Form login-->
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name="username" type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="password" type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>
                    <div class="button">
                    <input type="submit" name="submit" value="Login">
                    </div>
                    <!--Arahkan ke resgister-->
                    <div class="register">
                        <p>Don't have a account <a href="registrasi.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>