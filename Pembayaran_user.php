<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing:border-box;
        }
        .Pembayaran{
            padding: 0 10px 0px 10px 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax (350px,1fr));
            grid-gap: 20px 40px;
         }
        .heading{
            background-color: #00ff08;
            color: aliceblue;
            margin-bottom: 30px;
            padding: 30px 0;
            grid-column: 5/-5;
            text-align: center;
        }
        .heading>h1{
            font-weight: 800;
            font-size: 50px;
            letter-spacing: 10px;
            margin-bottom: 10px;
            color: black;
        }
        .h1{
            grid-column: 5/-5;
            text-align: center;
        }
        .Bayar>h2{
            width: 200px;
            height: 65px;
            border: 1px solid #000;
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding-right: 10px;
        }
        .Bayar>h2 img {
            width: 30px;
            height: 30px;
            margin-left: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="Pembayaran">
        <div class="heading">
            <h1>DELIVERY FOOD</h1>
        </div>        
    </div>
    <div class="Bayar">
        <h1><label>Pembayaran menggunakan : </label><br><br></h1>
        <h2>
            <input type="radio" name="Gender" class="cash"> Cash
            <img src="./duit.jpg" alt="Cash">
        </h2><br>
        <h2>
            <input type="radio" name="Gender" class="e-wallet"> E-Wallet
            <img src="./e-wallet.jpg" alt="E-Wallet">
        </h2><br>

        <a href="Halaman_user.php"><button>lanjutkan</button> <br></a>
        <a href="check-out.php"><button>Kembali</button></a>
    </div>
</body>