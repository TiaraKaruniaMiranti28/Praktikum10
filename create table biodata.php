<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_pendaftaran";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//create database
$sql = "CREATE TABLE biodata_siswa (
		id INT(4) PRIMARY KEY,
		nama VARCHAR(50),
		jk VARCHAR(10),
		nisn INT(20),
		nik INT(20),
		tmplahir VARCHAR(20),
		tgllahir INT(10),
		akta INT(20),
		agama VARCHAR(20),
		kwn VARCHAR(20),
		kebkhusus VARCHAR(20),
		alamat VARCHAR(30),
		rt INT(5),
		rw INT(5),
		dusun VARCHAR(20),
		desa VARCHAR(20),
		kec VARCHAR(20),
		pos INT(10),
		lintang VARCHAR(20),
		bujur VARCHAR(20),
		tmptinggal VARCHAR(20),
		transportasi VARCHAR(20),
		kks INT(20),
		anakke INT(5),
		penerimakps VARCHAR(10),
		nokps INT(20))";
	if (mysqli_query($conn, $sql)) {
	echo "Table created succesfully";
	}
	else {
	echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>