<!DOCTYPE html>
<html>
<head>
	<title>ApotekKu</title>
</head>
<body>

	<h2>Menu Edit Pegawai</h2>
	<h3>Data Pegawai</h3>

	<a href="/informasiPegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/updatepegawai" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

		Nama 		
			<input type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan 	
			<input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}"> <br/>
		Alamat 		
			<textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea> <br/>
		Telepon 	
			<input type="text" name="telepon" required="required" value="{{ $p->pegawai_telepon }}"> <br/>
		Umur 		
			<input type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}"> <br/>
		Gaji pokok
			<input type="text" name="gajiPokok" required="required" value="{{ $p->gaji_pokok }}"> <br/>
		Jenis Kelamin
			<input type="text" name="jenisKelamin" required="required" value="{{ $p->pegawai_jenisKelamin }}"> <br/>
		Status Kepegawaian
			<input type="text" name="statusPegawai" required="required" value="{{ $p->pegawai_status }}"> <br/>
		Tunjangan Transport/Makan
			<input type="number" name="tunjanganMakan" required="required" value="{{ $p->pegawai_tm }}"> <br/>
		Tunjangan Lembur
			<input type="number" name="tunjanganLembur" required="required" value="{{ $p->pegawai_tl }}"> <br/>
		Tunjangan Hari Raya
			<input type="number" name="tunjanganHariRaya" required="required" value="{{ $p->pegawai_thr }}"> <br/>
		Foto
			<input type="foto" name="foto" value="{{ $p->pegawai_photo }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>