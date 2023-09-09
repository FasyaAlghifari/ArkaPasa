<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
 <div class="container">
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['nama']; ?>! anda telah login.</h4>
	 <h2 class='judul'>CRUD DATA Siswa 11 PPLG</h2>
	 <br/>
	 <br/>
	 <br/>
	 <table border="1">
		 <tr>
			 <th>NO</th>
			 <th>Nama</th>
			 <th>NISN</th>
			 <th>Alamat</th>
			 <th>Jenis Kelamin</th>
			 <th>Tanggal Lahir</th>
			 <th>Jurusan</th>
		 </tr>
		 <?php 
		 include 'koneksi.php';
		 $no = 1;

		 $data = mysqli_query($koneksi,"select * from siswa");
		 
		 if(isset($_GET['tanggal'])){
			$tgl = $_GET['tanggal'];
			$data = mysqli_query($koneksi,"select * from siswa where tanggal_lahir='$tgl'");
		}else{
			$data = mysqli_query($koneksi,"select * from siswa");
		}
		 while($d = mysqli_fetch_array($data)){
			 ?>
			 <tr>
				 <td><?php echo $no++; ?></td>
				 <td><?php echo $d['nama']; ?></td>
				 <td><?php echo $d['nisn']; ?></td>
				 <td><?php echo $d['alamat']; ?></td>
				 <td><?php echo $d['jenis_kelamin']; ?></td>
				 <td><?php echo $d['tanggal_lahir']; ?></td>
				 <td><?php echo $d['jurusan']; ?></td>
			 </tr>
			 <?php 
		 }
		 ?>
	 </table>
	 	<div style="width: 800px;margin: 0px auto;">
			<canvas id="myChart"></canvas>
		</div>
		<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["PPLG", "TJKT", "MPLB", "HR", "DKV", "MESIN", "TKRO", "TITL", "DEBI", "RUBY"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_PPLG = mysqli_query($koneksi,"select * from siswa where jurusan='PPLG'");
					echo mysqli_num_rows($jumlah_PPLG);
					?>, 
					<?php 
					$jumlah_TJKT = mysqli_query($koneksi,"select * from siswa where jurusan='TJKT'");
					echo mysqli_num_rows($jumlah_TJKT);
					?>, 
					<?php 
					$jumlah_MPLB = mysqli_query($koneksi,"select * from siswa where jurusan='MPLB'");
					echo mysqli_num_rows($jumlah_MPLB);
					?>, 
					<?php 
					$jumlah_HR = mysqli_query($koneksi,"select * from siswa where jurusan='HR'");
					echo mysqli_num_rows($jumlah_HR);
					?>,
					<?php 
					$jumlah_DKV = mysqli_query($koneksi,"select * from siswa where jurusan='DKV'");
					echo mysqli_num_rows($jumlah_DKV);
					?>,  
					<?php 
					$jumlah_MESIN = mysqli_query($koneksi,"select * from siswa where jurusan='MESIN'");
					echo mysqli_num_rows($jumlah_MESIN);
					?>,  
					<?php 
					$jumlah_TKRO = mysqli_query($koneksi,"select * from siswa where jurusan='TKRO'");
					echo mysqli_num_rows($jumlah_TKRO);
					?>,  
					<?php 
					$jumlah_TITL = mysqli_query($koneksi,"select * from siswa where jurusan='TITL'");
					echo mysqli_num_rows($jumlah_TITL);
					?>,  
					<?php 
					$jumlah_DEBY = mysqli_query($koneksi,"select * from siswa where jurusan='DEBY'");
					echo mysqli_num_rows($jumlah_DEBY);
					?>,  
					<?php 
					$jumlah_RUBY = mysqli_query($koneksi,"select * from siswa where jurusan='RUBY'");
					echo mysqli_num_rows($jumlah_RUBY);
					?>,  
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<div style="width: 800px;margin: 0px auto;">
			<canvas id="jenis_kelamin"></canvas>
	</div>
			<script>
		var ctx = document.getElementById("jenis_kelamin").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["laki_laki", "perempuan"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_laki_laki = mysqli_query($koneksi,"select * from siswa where jenis_kelamin='laki_laki'");
					echo mysqli_num_rows($jumlah_laki_laki);
					?>, 
					<?php 
					$jumlah_perempuan = mysqli_query($koneksi,"select * from siswa where jenis_kelamin='perempuan'");
					echo mysqli_num_rows($jumlah_perempuan);
					?>
					],
					backgroundColor: [
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 99, 132, 0.2)'
					],
					borderColor: [
						'rgba(54, 162, 235, 1)',
						'rgba(255,99,132,1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	 <button class='tambah'>
		 <a href="logout.php" class='link'>LOGOUT</a>
	 </button>
 </div>
</body>
</html>