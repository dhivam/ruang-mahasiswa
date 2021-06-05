@extends('layout/main')

@section('tittle', 'Biodata')

@section('container')
<main id="main">


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="background-color:#F8F8F8;">>
        <div class="container" style="margin-top:5%;">
            <div class="row gy-4">

                <div class="col-lg-3">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">

                            <img src="img/profil.png" alt="">

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="portfolio-info">
                        @foreach ($user as $mhs)
                        <h3>Profil Biodata</h3>
                        <p style="font-size:15px; color:#094570"><strong>{{$mhs -> nim}}</strong></p>
                        <p style="margin-top:-2%; font-size:25px;"><strong>{{$mhs -> nama}}</strong></p>
                        <table style="margin-top:-2%;" width="90%">
                            <tr>
                                <th width="150px"></th>
                                <th width="20px"></th>
                                <th width="500px"></th>
                            </tr>
                            <tr>
                                <td><strong>Jenjang/Fakultas</strong></< /td>
                                <td>:</td>
                                <td>{{$mhs->jenjang}} / {{$mhs->fakultas}}</td>
                            </tr>
                            <tr>
                                <td><strong>Jurusan</strong></td>
                                <td>:</td>
                                <td>{{$mhs->jurusan}}</td>
                            </tr>
                            <tr>
                                <td><strong>Program Studi</strong></td>
                                <td>:</td>
                                <td>{{$mhs->prodi}}</td>
                            </tr>
                            <tr>
                                <td><strong>Seleksi</strong></td>
                                <td>:</td>
                                <td>{{$mhs->seleksi}}</td>
                            </tr>
                            <tr>
                                <td><strong>Status</strong></td>
                                <td>:</td>
                                <td>{{$mhs->status}}</td>
                            </tr>
                        </table>
                        @endforeach
                    </div>

                    <div class="col-lg-13">
                        <div class="portfolio-info" style="margin-top: 3%; background-color:#6495ED;">
                            <p>
                                Mahasiswa dipersilakan mengisi data wirausaha mahasiswa melalui halaman berikut:
                                <a class="link-website" href="https://siam.ub.ac.id/wirausaha.php" style="color:#F8F8F8F8"><u>https://siam.ub.ac.id/wirausaha.php</u></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->

@endsection