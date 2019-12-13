
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
                                <button class="button-table" style="background: red;">Informasi Pegawai</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="informasiObat"><button class="button-table">Informasi Obat</button></a>
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
                    <a href="/pegawai/tambahpegawai" style="font-family: roboto;">
                        <button class="button-tambah">
                            + Tambah
                        </button>
                    </a>

                    <table class="table1">
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
                            <th colspan="2" style="padding: 3px 30px;">Pilihan</th>
                        </tr>
                        @foreach($pegawai as $p)
                        <tr>
                            <td>{{ $p->pegawai_nama }}</td>
                            <td>{{ $p->pegawai_jabatan }}</td>
                            <td>{{ $p->pegawai_alamat }}</td>
                            <td>{{ $p->pegawai_telepon }}</td>
                            <td>{{ $p->pegawai_umur }}</td>
                            <td>Rp. {{ $p->gaji_pokok }}</td>
                            <td>{{ $p->pegawai_jenisKelamin }}</td>
                            <td>{{ $p->pegawai_status }}</td>
                            <td>Rp. {{ $p->pegawai_tm }}</td>
                            <td>Rp. {{ $p->pegawai_tl }}</td>
                            <td>Rp. {{ $p->pegawai_thr }}</td>
                            <td>{{ $p->pegawai_photo}}</td>
                            <td colspan="2">
                                <a href="/pegawai/editpegawai/{{ $p->pegawai_id }}"><button class="button-edit">Edit</button></a>                                <a href="/pegawai/hapuspegawai/{{ $p->pegawai_id }}"><button class="button-hapus">Hapus</button></a>

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
