@extends('admin/layout-admin/mainadmin')

@section('tittle', 'Daftar Dosen')

@section('cont')
<!-- ======= Services Section ======= -->

<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="zoom-out" style="margin-top:6%;">
            <h2>Data</h2>
            <p>Dosen</p>
        </div>

        <div class="container">
            <a href="/dosenadm/tambah"> + Tambah Dosen Baru</a>
            <div class="col-lg-20">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosen as $m)
                        <tr>
                            <td>{{$m->nip}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->email}}</td>
                            <td>{{$m->alamat}}</td>
                            <td>
                                <a href="/dosenadm/edit/{{ $m->id }}">Edit</a>
                                |
                                <a href="/dosenadm/hapus/{{ $m->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
</section>


@endsection