<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

	<title>ApotekKu</title>
	<style>
		body{
			background-image: url(../assets/image/background.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		p{ color: black; }
	</style>
</head>
<body>
	<h2>ApotekKu</h2>
	<h3>Menu Admin</h3>

	<a href="/pegawai/tambahpegawai">+ Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Umur</th>
			<th>Gaji Pokok</th>
			<th>Jenis Kelamin</th>
			<th>Status Kepegawaian</th>
			<th>Tunjangan Transport/Makan</th>
			<th>Tunjangan Lembur</th>
			<th>Tunjangan Hari Raya</th>
			<th>Photo</th>

		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>{{ $p->pegawai_telepon }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->gaji_pokok }}</td>
			<td>{{ $p->pegawai_jenisKelamin }}</td>
			<td>{{ $p->pegawai_status }}</td>
			<td>{{ $p->pegawai_tm }}</td>
			<td>{{ $p->pegawai_tl }}</td>
			<td>{{ $p->pegawai_thr }}</td>
			<td>{{ $p->pegawai_photo}}</td>
			<a href="/pegawai/editpegawai/{{ $p->pegawai_id }}">Edit</a>
			<a href="/pegawai/hapuspegawai/{{ $p->pegawai_id }}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>
</body>
</html>