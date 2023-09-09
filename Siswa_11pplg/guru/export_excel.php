<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Siswa.xls");
	?>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.MALASNGODING.COM</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="">No</th>
			<th>Nama</th>
			<th>NISN</th>
			<th width="">Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Jurusan</th>

		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from siswa");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td class='nomber'><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
			<td><?php echo $data['tanggal_lahir']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
</body>
</html