<?php
include"koneksi.php";

mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

$nama			= $_POST['nama'];
$jk 			= $_POST['jk'];
$nisn 			= $_POST['nisn'];
$nik 			= $_POST['nik'];
$tmplahir 		= $_POST['tmplahir'];
$tgllahir 		= $_POST['tgllahir'];
$akta 			= $_POST['akta'];
$agama 			= $_POST['agama'];
$kwn 			= $_POST['kwn'];
$kebkhusus 		= $_POST['kebkhusus'];
$alamat			= $_POST['alamat'];
$rt				= $_POST['rt'];
$rw 			= $_POST['rw'];
$dusun 			= $_POST['dusun'];
$desa	 		= $_POST['desa'];
$kec 			= $_POST['kec'];
$pos 			= $_POST['pos'];
$lintang 		= $_POST['lintang'];
$bujur 			= $_POST['bujur'];
$tmptinggal 	= $_POST['tmptinggal'];
$transportasi	= $_POST['transportasi'];
$kks 			= $_POST['kks'];
$anakke 		= $_POST['anakke'];
$penerimakps 	= $_POST['penerimakps'];
$nokps 			= $_POST['nokps'];

$sql = "insert biodata_siswa set nama='$nama', jk='$jk', nisn='$nisn', nik='$nik', tmplahir='$tmplahir', tgllahir='$tgllahir', akta='$akta', agama='$agama', kwn='$kwn', kebkhusus='$kebkhusus', alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', kec='$kec', pos='$pos', lintang='$lintang', bujur='$bujur', tmptinggal='$tmptinggal', transportasi='$transportasi', kks='$kks', anakke='$anakke', penerimakps='$penerimakps', nokps='$nokps'";

$query = mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

header("location:formpesertadidik.php");
?>