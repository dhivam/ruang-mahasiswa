@extends('admin/layout-admin/mainadmin')

@section('tittle', 'Daftar Matkul')

@section('cont')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="zoom-out" style="margin-top:6%;">
            <h2>Data</h2>
            <p>Matkul</p>
        </div>

        <div class="container">
            <a href="/matkul/tambah"> + Tambah Matkul Baru</a>
            <div class="col-lg-20">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">Dosen ID</th>
                            <th scope="col">Kode Matkul</th>
                            <th scope="col">Nama Matkul</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matkul as $m)
                        <tr>
                            <td>{{$m->dosen_id}}</td>
                            <td>{{$m->kode_matkul}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->semester}}</td>
                            <td>
                                <a href="/matkul/edit/{{ $m->id }}">Edit</a>
                                |
                                <a href="/matkul/hapus/{{ $m->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
</section>


@endsection