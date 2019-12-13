<!DOCTYPE html>
<html>
<head>
	<title>ApotekKu</title>
</head>
<body>
	<h2>Menu Tambah Obat</h2>
	<h3>Data Pegawai</h3>

	<a href="/informasiObat"> Kembali</a>

	<br/>
	<br/>

	<form action="/informasiObat/storeobat" method="post" >
		{{ csrf_field() }}

		Nama Obat<br/>
			<input type="text" name="namaObat" required="required"> <br/>
		Jenis Obat <br/>
			<input type="text" name="jenisObat" required="required"> <br/>
		Dosis Obat <br/>
			<input type="text" name="dosisObat" required="required"> <br/>
		Kegunaan Obat <br/>
			<input type="text" name="kegunaanObat" required="required"> <br/>
		Harga <br/>
			<input type="number" name="hargaObat" required="required"> <br/>
		Stok Obat <br/>
			<input type="number" name="stokObat" required="required"> <br/>
		Kadaluarsa <br/>
			<input type="date" name="kadaluarsa" > <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>