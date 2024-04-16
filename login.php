<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nex";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['pass'];

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      header("Location: index.html");
      exit;
  } else {
      echo "<script>alert('Email atau password salah atau tidak terdaftar');</script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NethingLabs Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Nex2.png" rel="icon">
  <link href="assets/img/Nex2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/login2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  
</head>

<body>
  <div>
    <div class="container-login100" style="background-image: url('assets/img/bg-01.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          <a href="index.html" class="logo me-auto"><img src="assets/img/nexthinglabs.png" alt="logo nexthinglabs" class="img-fluid"></a>
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" name="loginForm" method="post" onsubmit="return validateForm()">
          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="username" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xf007;"></span> <!-- Menggunakan ikon Font Awesome untuk username -->
          </div>
          
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf084;"></span> <!-- Menggunakan ikon Font Awesome untuk password -->
          </div>
          
          <div class="container-login100-form-btn m-t-32">
            <button type="submit" class="login100-form-btn">
              Login
            </button>
          </div>
  
        </form>
      </div>
    </div>
  </div>

  <script>
    function validateForm() {
        var username = document.forms["loginForm"]["username"].value;
        var password = document.forms["loginForm"]["pass"].value;

        if (username == "" || password == "") {
            alert("Mohon lengkapi username dan password");
            return false;
        }
        return true;
    }
  </script>
</body>

</html>