<?php
	// memulai session
	session_start();
    // membaca nilai variabel session 
	$chk_sess = $_SESSION['user'];
    // memanggil file koneksi
	include("koneksi_user.php");
	include("library_user.php");
    // mengambil data pengguna dari tabel pengguna
	$sql_sess = "SELECT * FROM users WHERE id_user='". $chk_sess ."'";
	$ress_sess = mysqli_query($conn, $sql_sess);
	$row_sess = mysqli_fetch_array($ress_sess);
	// menyimpan id_pengguna yang sedang login
	$sess_userid = $row_sess['id_user'];
	$sess_username = $row_sess['username'];
	$sess_password = $row_sess['password'];
    // mengarahkan ke halaman login.php apabila session belum terdaftar
	if(! isset($chk_sess)) {
	    header("location: index.php?login=false");
	}
?>