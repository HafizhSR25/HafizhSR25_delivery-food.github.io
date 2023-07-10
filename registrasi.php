<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css.css">
    <title>Pendaftaran</title>

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
        <form id="daftar-form">

          <div class="login-input-container">
            <label for="login-sebagai">Daftar sebagai : 
              <select name="login-sebagai">
                <option value="user">User</option>
              </select>
            </label>
          </div>

          <script>
            document.addEventListener("DOMContentLoaded", function() {
              var roleSpan = document.getElementById("role");
              roleSpan.innerHTML = "admin";
            });
          </script>
          

          <div class="login-input-container">
            <label for="username">Username</label><br />
            <input type="text" id="username" name="username" />
        
          </div>

          <div class="login-input-container">
            <label for="daerah">Asal Daerah</label><br />
            <input type="text" id="daerah" name="daerah" />
          </div>

          <div class="login-input-container">
            <label for="email">Email</label><br />
            <input type="email" id="email" name="email" />
          </div>

          <div class="login-input-container">
            <label for="password">Buat Kata Sandi</label><br />
            <input type="password" id="password" name="password" />
          </div>

          <div class="login-input-container">
            <label for="password-konfirmasi">Konfirmasi Kata Sandi</label><br />
            <input
              type="password"
              id="password-konfirmasi"
              name="password-konfirmasi"
            />
          </div>

          <div class="login-input-container">
            <label for="no-hp">No.Handphone</label><br />
            <input type="tel" id="no-hp" name="no-hp" />
          </div>

          <button onClick="daftar()">Daftar</button>
        </form>
      </div>
    </div>

    <script>
      // just-validate initialization
      const daftarValidator = new window.JustValidate("#daftar-form");

      // daftar validation rules
      daftarValidator
        .addField("#username", [
          {
            rule: "required",
            errorMessage: "Username tidak boleh kosong",
          },
        ])
        .addField("#daerah", [
          {
            rule: "required",
            errorMessage: "Daerah boleh kosong",
          },
        ])
        .addField("#email", [
          {
            rule: "required",
            errorMessage: "Email tidak boleh kosong",
          },
          {
            rule: "email",
            errorMessage: "Email tidak valid",
          },
        ])
        .addField("#password", [
          {
            rule: "required",
            errorMessage: "Password tidak boleh kosong",
          },
        ])
        .addField("#password-konfirmasi", [
          {
            rule: "required",
            errorMessage: "Password tidak boleh kosong",
          },
          {
            validator: (value, fields) => {
              if (fields["#password"] && fields["#password"].elem) {
                const repeatPasswordValue = fields["#password"].elem.value;

                return value === repeatPasswordValue;
              }

              return true;
            },
            errorMessage: "Password harus sama",
          },
        ])
        .addField("#no-hp", [
          {
            rule: "required",
            errorMessage: "No. Handphone tidak boleh kosong",
          },
        ]);

      // login function
      function daftar() {
        daftarValidator.revalidate().then((isValid) => {
          if (isValid) {
            // if form is valid, then move to login
            window.location.href = "index.php";
            alert("User berhasil dibuat!");
          }
        });
      }
    </script>
  </body>
</html>
