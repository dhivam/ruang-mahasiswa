<!doctype html>
<html>

<head>

    <link href="{{ asset('img/logotopi.png')}}" rel="icon">
    <title>Edit Dosen</title>

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
        <p><a style="color:skyblue; text-decoration:none;" href="/dosenadm">Daftar Dosen </a><span style="color: white;">/ Edit Dosen</span></p>
    </div>
    <table style="width:800px;">
        <tr>
            <td rowspan="15" width="300px">
                <img style="margin-left:25%" src="{{ asset('img/profildosen.png')}}" width="150px" height="150px">
            </td>
        </tr>
        @foreach($dosen as $p)
        <form action="/dosenadm/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br />
            <tr>
                <td width="70px"><b>NIP</b></td>
                <td>:</td>
                <td><input type="text" name="nip" required="required" value="{{ $p->nip }}"></td>
            </tr>
            <tr>
                <td width="70px"><b>Nama</b></td>
                <td>:</td>
                <td><input type="text" name="nama" required="required" value="{{ $p->nama }}"></td>
            </tr>
            <tr>
                <td width="70px"><b>Email</b></td>
                <td>:</td>
                <td><input type="email" name="email" required="required" value="{{ $p->email }}"></td>
            </tr>
            <tr>
                <td width="70px"><b>Alamat</b></td>
                <td>:</td>
                <td><input type="textarea" name="alamat" required="required" value="{{ $p->alamat }}"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan Data">

                </td>
            </tr>
    </table>
    </form>
    @endforeach

</body>

</html>