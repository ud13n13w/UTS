<?php
	
	include('koneksi.php');

	function selectDB(){
		global $koneksi;

		$query_select = "	SELECT nama,email,kursus,tgl_pendaftaran 
							FROM tbl_pendaftarankursus 
							ORDER BY tgl_pendaftaran DESC   ";

		$result = mysqli_query($koneksi, $query_select);

		if( mysqli_num_rows($result) > 0 ){

  			$no = 1;
  			while ( $row = mysqli_fetch_assoc($result) ){

  				//Data pada tabel
  				echo "<tr>";
					echo "<td>" . $no . "</td>";
					echo "<td>" . $row['nama'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td>" . $row['kursus'] . "</td>";
					echo "<td>" . $row['tgl_pendaftaran'] . "</td>";
				echo "</tr>";
  				$no++;
  			}

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
				
					<table cellspacing="0">
						<tr>
							<th>No</th>
				            <th>Nama</th>
				            <th>Email</th>
				            <th>Kursus</th>
				            <th>Tanggal Pendaftaran</th>
			            </tr>
						<tr>
							<?php 

							selectDB();

							?>
						</tr>
					</table>	
				</div>
				

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