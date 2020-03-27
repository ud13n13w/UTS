<?php
	
	include('koneksi.php');

	function cekPendaftaran($p_nohp){
		global $koneksi;

		$query_select = "	SELECT *
							FROM tbl_pendaftarankursus 
							WHERE nohp = '$p_nohp'   ";

		$result = mysqli_query($koneksi, $query_select);

		if( mysqli_num_rows($result) > 0 ){

			$jumlah_data = 0;
  			
  			//MULAI PROSES : Menampilkan Data

  			while ( $row = mysqli_fetch_assoc($result) ){

				?>
						<div class="listtabel">
							<table cellspacing="0">
								<tr>
									<th>ID transaksi</th>
									<td><?php echo $row['id_transaksi'] ?></td>
								</tr>
								<tr>
									<th>Kursus</th>
									<td><?php echo $row['kursus'] ?></td>
								</tr>
								<tr>
									<th>Tanggal Pendaftaran</th>
									<td><?php  echo $row['tgl_pendaftaran'] ?></td>
								</tr>
								<tr>
									<th>Nama</th>
									<td><?php  echo $row['nama'] ?></td>
								</tr>
								<tr>
									<th>Umur</th>
									<td><?php  echo $row['umur'] ?></td>
								</tr>
								<tr>
									<th>Jenis Kelamin</th>
									<td><?php  echo $row['jenis_kelamin'] ?></td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td><textarea><?php  echo $row['alamat'] ?></textarea></td>
								</tr>
								<tr>
									<th>Email</th>
									<td><textarea><?php  echo $row['email'] ?></textarea></td>
								</tr>
								<tr>
									<th>No HP</th>
									<td><textarea><?php  echo $row['nohp'] ?></textarea></td>
								</tr>
							</table>
						</div>

				<?php

				$jumlah_data++;
  			}

  			echo "<script> alert('Data berjumlah ". $jumlah_data ." ditemukan'); </script>";
			//AKHIR PROSES : Menampilkan Data
  		}
	}
	

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div class="wrap">
		
		<div class="header">
		
			<img src="image/header.png">

		</div>

		<div class="menu">
			
			<nav class="isimenu">
				<ul>
					<li>
						<a href="home.html">Home</a>
					</li>
					<li>
						<a href="daftarkursus.html">Kursus</a>
					</li>
					<li>
						<a href="pendaftaran.php">Pendaftaran</a>
					</li>
					<li>
						<a href="list_pendaftaran.php">List Pendaftaran</a>
					</li>
					<li>
						<a href="cek_pendaftaran.php">Formulir Pendaftaran</a>
					</li>
				</ul>
			</nav>

		</div>
		<div style="clear: both;"></div>

		<div class="content">

			<div class="contentfield">
				
				<div class="listtabel">

					<h3 class="judulpendaftaran">Form Pendaftaran Kursus</h3>
					
					<form method="POST">
						<table cellspacing="0">

							<tr>
								<th colspan="2">
									Masukkan No Hp
									<input type="text" name="input_nohp">
									<input type="submit" name="btn_cari" value="Cari" class="btn_cari">
									<input type="reset" name="btn_reset" value="Reset" class="btn_reset">
									<input type="submit" name="btn_ulang" value="Ulang" class="btn_ulang">
								</th>
							</tr>
						
						</table>	
					</form>

				</div>
				
				<?php 
					if( isset($_POST['btn_cari']) ){
						
						$nohp = $_POST['input_nohp'];

						//echo "<script> alert(' ". $nohp ." '); </script>";

						cekPendaftaran($nohp);

					}else if( isset($_POST['btn_ulang']) ){

						echo "<script type='text/javascript'> window.location='#'; </script>";

					}
				?>

			</div>

		</div>
	</div>
</body>
</html>

?>