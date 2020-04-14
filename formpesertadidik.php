<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		h2 {background : orange}
		fieldset{border-color: black}
		.warning {color: red}
	</style>
</head>
<body>

<?php
$error_tanggal = "";
$error_nama = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tmplahir = "";
$error_tgllahir = "";
$error_akta = "";
$error_agama = "";
$error_kwn = "";
$error_kebkhusus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_desa = "";
$error_kec = "";
$error_pos = "";
$error_lintang = "";
$error_bujur = "";
$error_tmptinggal = "";
$error_transportasi = "";
$error_kks = "";
$error_anakke = "";
$error_penerimakps = "";
$error_nokps = "";

$tanggal = "";
$nama = "";
$jk = "";
$nisn = "";
$nik = "";
$tmplahir = "";
$tgllahir = "";
$akta = "";
$agama = "";
$kwn = "";
$kebkhusus = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$desa = "";
$kec = "";
$pos = "";
$lintang = "";
$bujur = "";
$tmptinggal = "";
$transportasi = "";
$kks = "";
$anakke = "";
$penerimakps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $nama))
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["jk"]))
	{
		$error_jk = "Jenis Kelamin tidak boleh kosong";
	}
	else
	{
		$jk = cek_input($_POST["jk"]);
	}
	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn))
		{
			$error_nisn = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);
		if (!is_numeric($nik))
		{
			$error_nik = 'NIK hanya boleh angka';
		}
	}
	if (empty($_POST["tmplahir"]))
	{
		$error_tmplahir = "Tempat lahir tidak boleh kosong";
	}
	else
	{
		$tmplahir = cek_input($_POST["tmplahir"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $tmplahir))
		{
			$error_tmplahir = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["tgllahir"]))
	{
		$error_tgllahir = "Tanggal lahir tidak boleh kosong";
	}
	else
	{
		$tgllahir = cek_input($_POST["tgllahir"]);
		if (!is_numeric($tgllahir))
		{
			$error_tgllahir = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["akta"]))
	{
		$error_akta = "No registrasi akta lahir tidak boleh kosong";
	}
	else
	{
		$akta = cek_input($_POST["akta"]);
		if (!is_numeric($akta))
		{
			$error_akta = 'No registrasi akta lahir hanya boleh angka';
		}
	}
	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
	}
	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]);
	}
	if (empty($_POST["kebkhusus"]))
	{
		$error_kebkhusus = "Berkebutuhan khusus tidak boleh kosong";
	}
	else
	{
		$kebkhusus = cek_input($_POST["kebkhusus"]);
	}
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat jalan tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}
	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);
	}
	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);
	}
	if (empty($_POST["dusun"]))
	{
		$error_dusun = "Dusun tidak boleh kosong";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $dusun))
		{
			$error_dusun = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["desa"]))
	{
		$error_desa = "Desa tidak boleh kosong";
	}
	else
	{
		$desa = cek_input($_POST["desa"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $desa))
		{
			$error_desa = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["kec"]))
	{
		$error_kec = "Kecamatan tidak boleh kosong";
	}
	else
	{
		$kec = cek_input($_POST["kec"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $kec))
		{
			$error_kec = "Inputan hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["pos"]))
	{
		$error_pos = "Kode pos tidak boleh kosong";
	}
	else
	{
		$pos = cek_input($_POST["pos"]);
		if (!is_numeric($pos))
		{
			$error_pos = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["lintang"]))
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
	}
	if (empty($_POST["bujur"]))
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}
	if (empty($_POST["tmptinggal"]))
	{
		$error_tmptinggal = "Tempat tinggal tidak boleh kosong";
	}
	else
	{
		$tmptinggal = cek_input($_POST["tmptinggal"]);
	}
	if (empty($_POST["transportasi"]))
	{
		$error_transportasi = "Transportasi tidak boleh kosong";
	}
	else
	{
		$transportasi = cek_input($_POST["transportasi"]);
	}
	if (empty($_POST["anakke"]))
	{
		$error_anakke = "Anak ke tidak boleh kosong";
	}
	else
	{
		$anakke = cek_input($_POST["anakke"]);
		if (!is_numeric($anakke))
		{
			$error_anakke = 'Inputan hanya boleh angka';
		}
	}
	if (empty($_POST["penerimakps"]))
	{
		$error_penerimakps = "Inputan tidak boleh kosong";
	}
	else
	{
		$penerimakps = cek_input($_POST["penerimakps"]);
	}
}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<fieldset>
	<h2 align="center">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h2>
	<br>
	<form action="simpan_form.php" method="post">

		<table align="center" cellpadding="3%">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="nama" value="<?php echo $nama; ?>">
				<span class="warning"><?php echo $error_nama; ?></span>
			</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</td>
			<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
			<td><span class="warning"><?php echo $error_jk; ?></span></td>
		</tr>

		<tr>
			<td>NISN</td>
			<td>
				<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>">
				<span class="warning"><?php echo $error_nisn; ?></span>
			</td>
		</tr>

		<tr>
			<td>NIK</td>
			<td>
				<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="nik" value="<?php echo $nik; ?>">
				<span class="warning"><?php echo $error_nik; ?></span>
			</td>
		</tr>

		<tr>
			<td>Tempat Lahir</td>
			<td>
				<input type="text" name="tmplahir" class="form-control <?php echo ($error_tmplahir !="" ? "is-invalid" : ""); ?>" id="tmplahir" placeholder="tempat lahir" value="<?php echo $tmplahir; ?>">
				<span class="warning"><?php echo $error_tmplahir; ?></span>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="text" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="tanggal lahir" value="<?php echo $tgllahir; ?>">
				<span class="warning"><?php echo $error_tgllahir; ?></span>
			</td>
		</tr>

		<tr>
			<td>No. Registrasi Akta Lahir</td>
			<td>
				<input type="text" name="akta" class="form-control <?php echo ($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="no registrasi akta lahir" value="<?php echo $akta; ?>">
				<span class="warning"><?php echo $error_akta; ?></span>
			</td>
		</tr>

		<tr>
			<td>Agama</td>
			<td>
				<select name="agama">
					<option value=""></option>
					<option value="Agama Islam">Agama Islam</option>
					<option value="Agama Kristen">Agama Kristen</option>
					<option value="Agama Hindu">Agama Hindu</option>
					<option value="Agama Budha">Agama Budha</option>
					<option value="Agama Konghucu">Agama Konghucu</option>
					<option value="Agama Katolik">Agama Katolik</option>
				</select>
				<span class="warning"><?php echo $error_agama; ?></span>
			</td>
		</tr>

		<tr>
			<td>Kewarganegaraan</td>
			<td>
				<select name="kwn">
					<option value=""></option>
					<option value="WNI">WNI (Warga Negara Indonesia)</option>
					<option value="WNA">WNA (Warga Negara Asing)</option>
				</select>
				<span class="warning"><?php echo $error_kwn; ?></span>
			</td>
		</tr>

		<tr>
			<td>Berkebutuhan Khusus</td>
			<td>
				<input type="text" name="kebkhusus" class="form-control <?php echo ($error_kebkhusus !="" ? "is-invalid" : ""); ?>" id="kebkhusus" placeholder="berkebutuhan khusus" value="<?php echo $kebkhusus; ?>">
				<span class="warning"><?php echo $error_kebkhusus; ?></span>
			</td>
		</tr>

		<tr>
			<td>Alamat Jalan</td>
			<td>
				<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="alamat jalan" value="<?php echo $alamat; ?>">
				<span class="warning"><?php echo $error_alamat; ?></span>
			</td>
		</tr>

		<tr>
			<td>RT</td>
			<td>
				<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="rt" value="<?php echo $rt; ?>">
				<span class="warning"><?php echo $error_rt; ?></span>
			</td>
		</tr>

		<tr>
			<td>RW</td>
			<td>
				<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="rw" value="<?php echo $rw; ?>">
				<span class="warning"><?php echo $error_rw; ?></span>
			</td>
		</tr>

		<tr>
			<td>Nama Dusun</td>
			<td>
				<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="dusun" value="<?php echo $dusun; ?>">
				<span class="warning"><?php echo $error_dusun; ?></span>
			</td>
		</tr>

		<tr>
			<td>Nama Kelurahan/Desa</td>
			<td>
				<input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="desa" value="<?php echo $desa; ?>">
				<span class="warning"><?php echo $error_desa; ?></span>
			</td>
		</tr>

		<tr>
			<td>Kecamatan</td>
			<td>
				<input type="text" name="kec" class="form-control <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" id="kec" placeholder="kecamatan" value="<?php echo $kec; ?>">
				<span class="warning"><?php echo $error_kec; ?></span>
			</td>
		</tr>

		<tr>
			<td>Kode Pos</td>
			<td>
				<input type="text" name="pos" class="form-control <?php echo ($error_pos !="" ? "is-invalid" : ""); ?>" id="pos" placeholder="kode pos" value="<?php echo $pos; ?>">
				<span class="warning"><?php echo $error_pos; ?></span>
			</td>
		</tr>

		<tr>
			<td>Lintang</td>
			<td>
				<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="lintang" value="<?php echo $lintang; ?>">
				<span class="warning"><?php echo $error_lintang; ?></span>
			</td>
		</tr>

		<tr>
			<td>Bujur</td>
			<td>
				<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="bujur" value="<?php echo $bujur; ?>">
				<span class="warning"><?php echo $error_bujur; ?></span>
			</td>
		</tr>

		<tr>
			<td>Tempat Tinggal</td>
			<td>
				<input type="text" name="tmptinggal" class="form-control <?php echo ($error_tmptinggal !="" ? "is-invalid" : ""); ?>" id="tmptinggal" placeholder="tempat tinggal" value="<?php echo $tmptinggal; ?>">
				<span class="warning"><?php echo $error_tmptinggal; ?></span>
			</td>
		</tr>

		<tr>
			<td>Transportasi</td>
			<td>
				<input type="text" name="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi" placeholder="transportasi" value="<?php echo $transportasi; ?>">
				<span class="warning"><?php echo $error_transportasi; ?></span>
			</td>
		</tr>

		<tr>
			<td>Nomor KKS<br>(Kartu Keluarga Sejahtera)</td>
			<td>
				<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="nomor kks" value="<?php echo $kks; ?>">
				<span class="warning"><?php echo $error_kks; ?></span>
			</td>
		</tr>

		<tr>
			<td>Anak Ke-<br>(Berdasarkan KK)</td>
			<td>
				<input type="text" name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid" : ""); ?>" id="anakke" placeholder="anak ke-" value="<?php echo $anakke; ?>">
				<span class="warning"><?php echo $error_anakke; ?></span>
			</td>
		</tr>

		<tr>
			<td>Penerima KPS/PKH</td>
			<td><input type="radio" name="penerimakps" value="Ya">Ya</td>
			<td><input type="radio" name="penerimakps" value="Tidak">Tidak</td>
			<span class="warning"><?php echo $error_penerimakps; ?></span>
		</tr>

		<tr>
			<td>No. KPS/PKH<br>(Apabila Menerima)</td>
			<td>
				<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="nomor kps" value="<?php echo $nokps; ?>">
				<span class="warning"><?php echo $error_nokps; ?></span>
			</td>
		</tr>

		</table>
		<br>
		<center>
			<input type="submit" name="submit" value="KIRIM">
		</center>
			
	</form>
</fieldset>

</body>
</html>