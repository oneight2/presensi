<?php
	define("BASE_URL", "http://localhost/presensi/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "kp";
	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");
