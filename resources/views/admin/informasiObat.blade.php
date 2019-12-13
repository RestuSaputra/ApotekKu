
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/styleMenu.css">
    <title>Menu Admin</title>
    <style>
        body{
            background-image: url(../assets/image/background.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
        p{  color: black;   }
    </style>
    <table>
        <tr>
            <th><img src="../assets/image/logo.png" class="logo" width="150" height="75"></th>
            <th style="width: 700px; text-align: right; font-family: 'Raleway', sans-serif; font-size:35pt; color: green; font-weight: bolder;">
                Menu Admin
            </th>
            <th style="text-align: right; width: 400px;"><p id="nama">{{Session::get('name')}}</th>
            </tr>
        </table>
        <hr class="garis">
        <table>
            <th>
                <div class="boxTombol">
                    <table cellpadding="5">
                        <tr>
                            <td>
                                <a href="informasiPegawai"><button class="button-table" >Informasi Pegawai</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><button class="button-table" style="background: red;">Informasi Obat</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><button class="button-table">Data User</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><button class="button-table">Pendapatan harian</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="/logout"><button class="button-table">Logout</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><button class="button-table">Kembali</button></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </th>
            <th >
                <div class="boxInformasiPegawai">
                    <a href="#" style="font-family: roboto;">
                        <button class="button-tambah">
                            + Tambah
                        </button>
                    </a>

                    <table class="table1">
                        <tr>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                            <th>Dosis Obat</th>
                            <th>Kegunaan Obat</th>
                            <th>Harga</th>
                            <th>Stok Obat</th>
                            <th>Kadaluarsa</th>
                            <th colspan="2" style="padding: 3px 30px;">Pilihan</th>
                        </tr>
                        @foreach($obat as $p)
                        <tr>
                            <td>{{ $p->nama_obat }}</td>
                            <td>{{ $p->jenis_obat }}</td>
                            <td>{{ $p->dosis_obat }}</td>
                            <td>{{ $p->kegunaan_obat }}</td>
                            <td>{{ $p->harga_obat }}</td>
                            <td>Rp. {{ $p->stok_obat }}</td>
                            <td>{{ $p->kadaluarsa }}</td>
                            <td colspan="2">
                                <a href="/informasiObat/editobat/{{ $p->kode_obat }}"><button class="button-edit">Edit</button></a>                                <a href="/informasiObat/hapusobat/{{ $p->kode_obat }}"><button class="button-hapus">Hapus</button></a>

                            </td>
                            <td >
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </th>
        </table>
    </head>
    <body>
        <section class="main-section">
            <!-- Add Your Content Inside -->
            <!-- /.content -->
        </section>
        <!-- /.main-section -->

    </body>
    </html>
