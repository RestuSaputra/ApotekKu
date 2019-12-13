<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleEdit.css">
	<title>ApotekKu</title>
		<style>
	        body{
	            background-image: url(../assets/image/background.jpg);
	            background-size: cover;
	            background-attachment: fixed;
	        }
	        p{  color: black;   }
	    </style>
</head>
<body>
	<h2>Menu Tambah Pegawai</h2>
	<h3>Data Pegawai</h3>

	<a href="/informasiPegawai"> Kembali</a>

	<br/>
	<br/>

	<div class="boxInformasi">
		<form action="/pegawai/storepegawai" method="post" >
			{{ csrf_field() }}
		<table>
			<tr>
				<table>
					<td>
						<div class="huruf"> Nama </div><br/>
						<input type="text" name="nama" required="required" class="editTambah"> <br/>
					</td>
					<td>
						<div class="huruf"> Jabatan </div><br/>
						<input type="text" name="jabatan" required="required" class="editTambah"> <br/>
					</td>
					<td></td>
					<div class="huruf"> Alamat </div><br/>
						<textarea name="alamat" required="required" class="editTambah"></textarea> <br/>
					<div class="huruf"> Telepon </div><br/>
						<input type="text" name="telepon" required="required" class="editTambah"> <br/>
					<div class="huruf"> Umur </div><br/>
						<input type="number" name="umur" required="required" class="editTambah"> <br/>
					<div class="huruf"> Gaji Pokok </div><br/>
						<input type="number" name="gajiPokok" required="required" class="editTambah"> <br/>
				</table>
			</tr>
			<tr>
				<table>
					<div class="huruf"> Jenis Kelamin </div><br/>
						<input type="text" name="jenisKelamin" required="required" class="editTambah"> <br/>
					<div class="huruf"> Status Kepegawaian </div><br/>
						<input type="text" name="statusPegawai" required="required" class="editTambah"> <br/>
					<div class="huruf"> Tunjangan Transport </div><br/>
						<input type="number" name="tunjanganMakan" class="editTambah"> <br/>
					<div class="huruf"> Tunjangan Lembur </div><br/>
						<input type="number" name="tunjanganLembur" class="editTambah"> <br/>
					<div class="huruf"> Tunjangan hari raya </div><br/>
						<input type="number" name="tunjanganHariRaya" class="editTambah"> <br/>
					Foto <br/>
						<input type="file" name="foto"><br/><br/>
					<input type="submit" value="Simpan Data">
				</table>
			</tr>
		</table>
		</form>
	</div>
	<div class="space">
			<a href="/informasiPegawai"><button class="buttonAja">Kembali</button> </a>
	</div>


</body>
</html>