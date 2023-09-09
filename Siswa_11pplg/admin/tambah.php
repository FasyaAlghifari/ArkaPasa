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
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td><input type="number" name="nisn"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<td>Jenis kanjut</td>
					<td>
						<select name="jenis_kelamin" id="jenis_kelamin">
							<option value="laki_laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
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
</body>
</html>