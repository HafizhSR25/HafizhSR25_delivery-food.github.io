<?php 
include 'koneksi_user.php';
?>

<?php
	function format_rupiah($rp) {
		$jumlah = number_format($rp, 0, ",", ".");
		$rupiah = "Rp". $jumlah;
		
		return $rupiah;
	}
	function format_rupiah_akunting($rp) {
		$jumlah = number_format($rp, 0, ",", ".");
		$rupiah = '<div class="float-left">Rp</div><div class="float-right">'. $jumlah .'</div><div class="clear-both"></div>';
		
		return $rupiah;
	}
	function format_rupiah_kwitansi($rp) {
		$jumlah = number_format($rp, 0, ",", ".");
		$rupiah = "Rp". $jumlah .",-";
		
		return $rupiah;
	}
?>

<?php
	function format_tanggal($tgl) {
		$blns = array("", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des");
		$hrs = array("Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hrs[$tgls['wday']] .", ". $hr ."-". $blns[$tgls['mon']] ."-". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_lahir($tpt, $tgl) {
		$blns = array("", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $tpt .", ". $hr ."-". $blns[$tgls['mon']] ."-". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_laporan($tpt, $tgl) {
		$blns = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $tpt .", ". $hr ." ". $blns[$tgls['mon']] ." ". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_strip($tgl) {
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hr ."-". $tgls['mon'] ."-". $tgls['year'];
		
		return $tanggal;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tracking</title>
</head>

<body>
  <div class="tracking">
    <div class="heading">
      <h1>DELIVERY FOOD</h1>
      <h3>&mdash; TRACKING BARANG &mdash; </h3>

      <body>
    </div>


    <div class="panel-body">
								<table class="table table-striped table-bordered table-hover" id="tabel-data">
									<thead>
										<tr>
											<th width="1%">No</th>
											<th width="10%">ID Tracking</th>
											<th width="8%">Tanggal</th>
											<th width="8%">Keterangan</th>
											<th width="8%">Harga</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$i = 1;
											$sql = "SELECT tracking.*, nama_kota.* FROM tracking, nama_kota WHERE
													tracking.id_kota=nama_kota.id_kota ORDER BY tracking.id_tracking DESC";
											$ress = mysqli_query($conn, $sql);
											while($data = mysqli_fetch_array($ress)) {
												echo '<tr>';
												echo '<td class="text-center">'. $i .'</td>';
												echo '<td class="text-center">'. $data['id_tracking'] .'</td>';
												echo '<td class="text-center">'. format_tanggal($data['tanggal']) .'</td>';
												echo '<td class="text-center">'. $data['keterangan'] .'</td>';
												echo '<td class="text-center">'. format_rupiah($data['harga']) .'</td>';
												echo '<td class="text-center">
													  <a href="#myModal" data-toggle="modal" data-load-code="'.$data['id_tracking'].'" data-remote-target="#myModal .modal-body" class="btn btn-primary btn-xs">Detail</a>';?>
												<?php
													  echo '</td>';
												echo '</tr>';												
												$i++;
											}
										?>
									</tbody>
								</table>
							</div>
</body>
</div>
</body>
<div class="taskbar2">
  <div class="heading-taskbar2">
    <a href="Halaman_user.php"><img src="./home-removebg-preview.png"></a>
  </div>
</div>
</html>