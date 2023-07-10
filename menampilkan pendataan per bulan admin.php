<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Simulasi data pendapatan per bulan
$incomeData = [
    'Januari' => 5000,
    'Februari' => 7000,
    'Maret' => 4500,
    'April' => 6000,
    'Mei' => 8000,
    'Juni' => 5500
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Selamat datang di halaman admin</h1>
    
    <h2>Total Pendapatan Per Bulan</h2>
    <table>
        <tr>
            <th>Bulan</th>
            <th>Total Pendapatan</th>
        </tr>
        <?php foreach($incomeData as $month => $income): ?>
        <tr>
            <td><?php echo $month; ?></td>
            <td><?php echo $income; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <a href="logout.php">Logout</a>
</body>
</html>
