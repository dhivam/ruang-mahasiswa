<!doctype html>
<html>

<head>

    <link href="{{ asset('img/logotopi.png')}}" rel="icon">
    <title>Tambah Dosen</title>

</head>
<style>
    table,
    tr,
    td {
        background-color: #ffffff;
        font-family: Verdana;
        color: black;
        padding: 0px;
        margin-left: 25%;
        border-collapse: collapse;
    }

    .table {
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .posisi {
        position: absolute;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
        margin-top: auto;
        left: 0;
        right: 0;
        top: 100px;
        bottom: 0;
    }

    body {
        background-color: #094570;
        background-repeat: no-repeat;
        background-size: 1400px auto;
    }

    h3 {
        color: white;
        font-family: Verdana;
    }

    .atas {
        font-family: Verdana;
        font-style: italic;
        margin-top: 68px;
        margin-left: 63%
    }
</style>

<body>

    <div class="atas">
        <p><a style="color:skyblue; text-decoration:none;" href="/mahasiswa">Daftar Mahasiswa </a><span style="color: white;">/ Tambah Mahasiswa</span></p>
    </div>
    <table style="width:800px;">
        <tr>
            <td rowspan="15" width="300px">
                <img style="margin-left:25%" src="{{ asset('img/profildosen.png')}}" width="150px" height="150px">
            </td>
        </tr>

        <form action="/mahasiswa/store" method="post">
            {{ csrf_field() }}

            <tr>
                <td width="100px"><b>NIM</b></td>
                <td>:</td>
                <td><input type="text" name="nim" required="required"></td>
            </tr>

            <tr>
                <td width="70px"><b>Nama</b></td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Jenjang</b></td>
                <td>:</td>
                <td><input type="text" name="jenjang" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Fakultas</b></td>
                <td>:</td>
                <td><input type="text" name="fakultas" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Jurusan</b></td>
                <td>:</td>
                <td><input type="text" name="jurusan" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Prodi</b></td>
                <td>:</td>
                <td><input type="text" name="prodi" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Seleksi</b></td>
                <td>:</td>
                <td><input type="text" name="seleksi" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Status</b></td>
                <td>:</td>
                <td><input type="text" name="status" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>User ID</b></td>
                <td>:</td>
                <td><input type="number" name="id_user" required="required"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan Data">

                </td>
            </tr>
    </table>
    </form>

</body>

</html>