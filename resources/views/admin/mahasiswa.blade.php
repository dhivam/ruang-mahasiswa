@extends('admin/layout-admin/mainadmin')

@section('tittle', 'Daftar Mahasiswa')

@section('cont')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="zoom-out" style="margin-top:6%;">
            <h2>Data</h2>
            <p>Mahasiswa</p>
        </div>

        <div class="container">
            <a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
            <div class="col-lg-20">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenjang</th>
                            <th scope="col">Faktultas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Seleksi</th>
                            <th scope="col">Status</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{$m->nim}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->jenjang}}</td>
                            <td>{{$m->fakultas}}</td>
                            <td>{{$m->jurusan}}</td>
                            <td>{{$m->prodi}}</td>
                            <td>{{$m->seleksi}}</td>
                            <td>{{$m->status}}</td>
                            <td>{{$m->id_user}}</td>
                            <td>
                                <a href="/mahasiswa/edit/{{ $m->id }}">Edit</a>
                                |
                                <a href="/mahasiswa/hapus/{{ $m->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
</section>


@endsection