<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="Style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Check-out</title>
  </head>
  <body>
    <div class="menu">
      <div class="heading">
        <h1>CHECK-OUT</h1>
      </div>
    </div>

    <div class="menu-1">
      <img src="./Keripik_kaca-removebg-preview.png" alt="" />
      <div class="container">
        <h2>Pengiriman</h2>
        <br />

        <form action="" method="post">
          <div class="form-group">
            <label for="nama">Nama pengirim:</label>
            <input type="text" id="nama" name="nama" required />
          </div>
            <div class="form-group">
                <label for="alamat">Alamat Pengiriman :</label>
                <textarea id="alamat" name="alamat" rows="4" required></textarea>              
            </div>
            
            <div class="form-group">
                <a href="Pembayaran_user.php"><input type="submit" value="bayar sekarang" style="color: black;"></a>
                <script src="check out.js"></script>
            </div>
            
            <div class="form-group2">
                <a href="Halaman_user.php"><input type="submit" value="kembali" style="color: black;"></a>
            </div>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>