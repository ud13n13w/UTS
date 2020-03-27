<?php

	$server	  = "localhost";
	$username = "root";
	$password = "";
	$database = "db_pemrogramanweb";

	//1. Membuat Koneksi
	$koneksi = mysqli_connect($server, $username, $password, $database);

	if( $koneksi ){
		//echo "Koneksi Database BERHASIL";
	}else{
		//echo "Koneksi Database GAGAL";
	}



?>