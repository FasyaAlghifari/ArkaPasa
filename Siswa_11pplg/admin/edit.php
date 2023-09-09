<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td><input type="number" name="nisn" value="<?php echo $d['nisn']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis kanjut</td>
					<td>
						<select name="jenis_kelamin" id="jenis_kelamin">
							<option value="laki-laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
							<option value="Aki-Aki">Aki-Aki</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>
						<select name="jurusan" id="jurusan">
							<option value="PPLG">PPLG</option>
							<option value="TJKT">TJKT</option>
							<option value="MPLB">MPLB</option>
							<option value="HR">HR</option>
							<option value="DKV">DKV</option>
							<option value="MESIN">MESIN</option>
							<option value="TKRO">TKRO</option>
							<option value="TITL">TITL</option>
							<option value="DEBI">DEBI</option>
							<option value="RUBY">RUBY</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>