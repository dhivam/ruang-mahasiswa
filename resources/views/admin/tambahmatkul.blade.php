<!doctype html>
<html>

<head>

    <link href="{{ asset('img/logotopi.png')}}" rel="icon">
    <title>Tambah Matkul</title>

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
        <p><a style="color:skyblue; text-decoration:none;" href="/matkul">Daftar Matkul </a><span style="color: white;">/ Tambah Matkul</span></p>
    </div>
    <table style="width:800px;">
        <tr>
            <td rowspan="15" width="300px">
                <img style="margin-left:25%" src="{{ asset('img/profildosen.png')}}" width="150px" height="150px">
            </td>
        </tr>

        <form action="/matkul/store" method="post">
            {{ csrf_field() }}

            <tr>
                <td width="70px"><b>Dosen ID</b></td>
                <td>:</td>
                <td><input type="text" name="dosen_id" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Kode Matkul</b></td>
                <td>:</td>
                <td><input type="text" name="kode_matkul" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Nama Matkul</b></td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td width="70px"><b>Semester</b></td>
                <td>:</td>
                <td><input type="text" name="semester" required="required"></td>
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