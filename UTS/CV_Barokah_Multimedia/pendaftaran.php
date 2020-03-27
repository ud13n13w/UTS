<?php
	
	include('koneksi.php');

	function insertDB( $p_tgl_pendaftaran, $p_kursus, $p_nama, $p_umur, $p_jenis_kelamin, $p_alamat, $p_email, $p_nohp){

		global $koneksi;

  		$query_insert = "  INSERT INTO tbl_pendaftarankursus 
  						   VALUES ( DEFAULT,'$p_tgl_pendaftaran','$p_kursus','$p_nama','p_umur','$p_jenis_kelamin',
  						   			'$p_alamat','$p_email','$p_nohp'
  						           )  ";

		//echo "<script> alert(' ". $query_insert ." '); </script>";

		if($query_insert){
			mysqli_query($koneksi, $query_insert);
			
			echo "<script> alert('Pendaftaran Kursus BERHASIL'); </script>";
			echo "<script type='text/javascript'> window.location='list_pendaftaran.php'; </script>";
		}else{
			echo "<script> alert('ERROR : TAMBAH DATA GAGAL'); </script>";
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
				
				<h3 class="judulpendaftaran">Form Pendaftaran Kursus</h3>

				<form method="POST" action="pendaftaran.php">
					<table cellspacing="0">
						<tr>
							<th>Nama</th>
							<td><input type="text" name="input_nama" size="35" ></td>
						</tr>
						<tr>
							<th>Umur</th>
							<td><input type="number" name="input_umur" size="3" ></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><input type="email" name="input_email" size="35"  ></td>
						</tr>
						<tr>
							<th>No HP</th>
							<td><input type="text" name="input_nohp"  size="14" ></td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td>
								<input type="radio" name="input_jeniskelamin" value="Laki-Laki" > Laki-Laki
								<input type="radio" name="input_jeniskelamin" value="Perempuan"> Perempuan
							</td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td><textarea name="input_alamat" rows="2" cols="50"></textarea></td>
						</tr>
						<tr>
							<th>Kursus</th>
							<td>
								<input type="radio" name="input_kursus" value="Desain Grafis"> Desain Grafis
								<input type="radio" name="input_kursus" value="Fotografi"> Fotografi
								<input type="radio" name="input_kursus" value="Videografi"> Videografi
								<input type="radio" name="input_kursus" value="Broadcasting"> Broadcasting
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="btn_simpan" value="Simpan" class="btn_simpan">
								<input type="reset" name="btn_reset" value="Reset" class="btn_reset">
							</td>
						</tr>
						
					</table>	
				</form>

			</div>

		</div>
	</div>
</body>
</html>

<?php

	if( isset($_POST['btn_simpan']) ){

		date_default_timezone_set('Asia/Jakarta');
		$tgl_pendaftaran = date("Y-m-d H:i:s");
		$kursus = $_POST['input_kursus'];
		$nama = $_POST['input_nama'];
		$umur = $_POST['input_umur'];
		$jenis_kelamin = $_POST['input_jeniskelamin'];
		$alamat = $_POST['input_alamat'];
		$email = $_POST['input_email'];
		$nohp = $_POST['input_nohp'];

		insertDB($tgl_pendaftaran, $kursus, $nama, $umur, $jenis_kelamin, $alamat, $email, $nohp);
	}

?>