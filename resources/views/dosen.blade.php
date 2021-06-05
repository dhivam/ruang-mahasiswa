<!doctype html>
<html>

<head>

    <link href="{{ asset('img/logotopi.png')}}" rel="icon">
    <title>Profil Dosen</title>

</head>
<style>
    table,
    tr,
    td {
        background-color: #ffffff;
        font-family: Verdana;
        color: black;
        padding: 0px;
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
        <p><a style="color:skyblue; text-decoration:none;" href="/dosen">Dosen </a><span style="color: white;">/ Profil Dosen</span></p>

    </div>

    <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
        </ol> -->

    <form action="#" style="width: 900px" class="posisi">

        <table style="width:800px;">
            <tr>
                <td rowspan="15" width="300px">
                    <img style="margin-left:25%" src="{{ asset('img/profildosen.png')}}" width="150px" height="150px">
                </td>
            </tr>
            <tr>
                <td width="70px"><b>NIP</b></td>
                <td>:</td>

                <td>{{$matkul->nip}}</td>

            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td>:</td>

                <td>{{$matkul->nama}}</td>

            </tr>
            <tr>
                <td><b>Email</b></td>
                <td>:</td>

                <td>{{$matkul->email}}</td>

            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td>:</td>

                <td>{{$matkul->alamat}}</td>

            </tr>
        </table>
        <div style="margin-top: 3%">

            <h3>Matakuliah yang diampu Dosen {{$matkul->nama}}</h3>

            <table class="table" style="width:800px;">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Kode Matkul</th>
                        <th scope="col">Nama Matkul</th>
                        <th scope="col">Semester</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($dosen as $x)
                    <tr>
                        <td>{{$x->kode_matkul}}</td>
                        <td>{{$x->nama}}</td>
                        <td>{{$x->semester}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </form>
</body>

</html>