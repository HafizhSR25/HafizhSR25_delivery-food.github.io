<?php
session_start();

// Cek apakah pengguna sudah login sebelumnya, jika ya, redirect ke halaman admin
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: grafik_admin.php");
    exit;
}

// Cek apakah form login telah disubmit
if(isset($_POST['login'])) {
    $username = 'admin'; // Ganti dengan username yang sesuai
    $password = 'admin123'; // Ganti dengan password yang sesuai

    // Cek apakah username dan password yang diinput sesuai
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: grafik_admin.php");
        exit;
    } else {
        echo "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- just-validate - JS validation plugin -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .center {
        margin: auto;
      }

      .login-input-container {
        margin-bottom: 2rem;
      }
    </style>
  </head>
  <body>
    
    <div
      style="
        padding: 1rem 2rem 1rem 2rem;
        background-color: #00ff08;
        border: 2px solid black;
        border-radius: 10px;
      "
      class="center"
    >
      <div style="text-align: center">
        <form id="login-form">
          <div class="login-input-container">
            <label for="username">Username/no.handphone </label><br />
            <input type="text" id="username" name="username" />
          </div>

          <div class="login-input-container">
            <label for="password">Password</label><br />
            <input type="password" id="password" name="password" />
          </div>

          <button onClick="login()">Login</button>
        </form>
      </div>

      <div style="margin-top: 1.5rem; text-align: center">
        <span>
          jika belum daftar
          <a href="./registrasi.php">Register</a>
        </span>
      </div>
    </div>

    <script>
      // just-validate initialization
      const loginValidator = new window.JustValidate("#login-form");
      // login validation rules
      loginValidator
        .addField("#username", [
          {
            rule: "required",
            errorMessage: "Username / no. handphone tidak boleh kosong",
          },
        ])
        .addField("#password", [
          {
            rule: "required",
            errorMessage: "Password tidak boleh kosong",
          },
        ]);

      // login function
      function login() {
        loginValidator.revalidate().then((isValid) => {
          if (isValid) {
            // if form is valid, then move to halaman awal
            window.location.href = "Halaman_user.php";
          }
        });
      }
      // Mendapatkan elemen formulir login
      var loginForm = document.getElementById('login-form');

      // Menangani acara submit formulir login
      loginForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Mencegah formulir untuk melakukan submit default

      // Mendapatkan nilai input username dan password
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Lakukan validasi sederhana
      if (username === 'admin' && password === 'admin123') {
      // Jika kredensial benar, arahkan ke halaman admin
      window.location.href = 'grafik_admin.php';
      } else {
      // Jika kredensial salah, tampilkan pesan error
      var errorElement = document.getElementById('error-message');
      errorElement.innerText = 'Username atau password salah.';
    }
  });

      
    </script>
  </body>
</html>
