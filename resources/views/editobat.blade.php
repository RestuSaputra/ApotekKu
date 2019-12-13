<!DOCTYPE html>
<html>
<head>
	<title>ApotekKu</title>
</head>
<body>

	<h2>Menu Edit Obat</h2>
	<h3>Data Obat</h3>

	<a href="/informasiObat"> Kembali</a>

	<br/>
	<br/>

	@foreach($obat as $p)
	<form action="/informasiObat/updateobat" method="post" >
		{{csrf_field()}}

		<input type="hidden" name="id" value="{{ $p->kode_obat }}"> <br/>
		Nama Obat 		
			<input type="text" name="namaObat" required="required" value="{{ $p->nama_obat }}"> <br/>
		Jenis Obat	
			<input type="text" name="jenisObat" required="required" value="{{ $p->jenis_obat }}"> <br/>
		Dosis Obat 		
			<input type="text" name="dosisObat" required="required" value="{{ $p->dosis_obat }}" > <br/>
		Kegunaan 	
			<input type="text" name="kegunaanObat" required="required" value="{{ $p->kegunaan_obat }}"> <br/>
		Harga 		
			<input type="number" name="hargaObat" required="required" value="{{ $p->harga_obat }}"> <br/>
		Stok Obat
			<input type="text" name="stokObat" required="required" value="{{ $p->stok_obat }}"> <br/>
		Kadaluarsa
			<input type="date" name="kadaluarsa" required="required" value="{{ $p->kadaluarsa }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>