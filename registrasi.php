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

// Proses register
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $passworduser = $_POST['password'];

    $query = "INSERT INTO users (email, password) VALUES ('$email', '$passworduser')";
    if (mysqli_query($koneksi, $query)) {
        echo "Registrasi berhasil. Silakan login dengan email dan password Anda.";
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>REGISTER</title>
</head>
<body>
    <section>
        <!--Form registrasi-->
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
