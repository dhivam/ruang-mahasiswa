@extends('layout/main')

@section('tittle', 'Dosen')

@section('container')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="zoom-out" style="margin-top:6%;">
            <h2>Daftar</h2>
            <p>Nama Dosen</p>
        </div>

        <div class="container">
            <div class="col-lg-20">

                <table class="table table-striped " style="margin-top:-3%;">
                    <thead>
                        <tr>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosen as $x)
                        <tr>
                            <td><a href="/dosen/{{$x->id}}/profile">{{$x->nama}}</a></td>
                            <td>{{$x->nip}}</td>
                            <td>{{$x->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
</section>


@endsection