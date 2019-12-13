
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
                                <a href="/pegawai"><button class="button-table">Informasi Pegawai</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><button class="button-table">Informasi Obat</button></a>
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
                    </table>
                </div>
            </th>
            <th >
                <div class="boxInformasi">
                <table cellpadding="5">
                    <tr>
                        <p style="font-family: roboto; font-size: 25pt; font-weight: bolder; padding-top: 120px;">Selamat Datang</p>
                        <p style="font-family: roboto; font-size: 25pt; font-weight: bolder; padding-top: 30px;">Silahkan pilih menu yang anda inginkan</p>
                    </tr>
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
