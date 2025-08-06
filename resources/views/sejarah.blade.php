@extends('layouts.welcome.master')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Sejarah</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Welcome</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Sejarah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75" src="{{ asset('assets/img/balai_desa.jpg') }}" alt="">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">Balai Desa Sindangpano</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">Sejarah</span> Desa Sindangpano</h1>
                        <p>
                            Desa Sindangpano dahulu namanya sejak jaman Kerajaan Hindu yang pada masa jayanya pada jaman Kerajaan Pajajaran. Ada Kampung atau lembur yang di namanya <strong>Kole Beres</strong> yang dipimpin oleh seseorang (Kuwu) yang pertama adalah <strong>Prabu Atma Lengkara atau Guriang Katuran</strong> yang bertempat di Komplek Kepel.
                        </p>

                        <p>
                            Kemudian selanjutnya (Yang ke-2) dipimpin oleh Guriang Raja Polah dan setelah Lengser Guriang Raja Polah selanjutnya dipimpin oleh Para Demang, yaitu:
                        </p>

                        <ol>
                            <li>Demang Toplak</li>
                            <li>Demang Karwi</li>
                            <li>Demang Centong / Gagak Resi</li>
                            <li>Demang Candranala</li>
                        </ol>

                        <p>
                            Masa pemerintahan ini terjadi sebelum Abad 14 Masehi yang Desanya disebut <strong>Muara Beres</strong>.
                        </p>

                        <p>
                            Pada tahun 1425 Masehi pada masa penyebaran Agama Islam di Pulau Jawa khususnya di Cirebon yang di bawa oleh Wali Sanga (Sembilan Wali). Setelah Wali Sanga mengadakan musyawarah (nonob) dilakukan di Puncak Gunung Ciremai kemudian mampir (numpang) di daerah ini sambil menyebarkan Agama Islam, lama kelamaan dia dipercaya oleh masyarakat dan dalam kepemimpinannya dia berbuat adil dan bijaksana yaitu pada masa kepemimpinan <strong>Pangeran Panunggelan</strong>. 
                        </p>

                        <p>
                            Masa pemimpin ini merupakan pemimpin dari <strong>Embah Kuwu Sangkan</strong> dari Cirebon Girang, pada masa pemerintahan ini merupakan suatu lembur yang sangat Aman, Tentram, Repeh-rapih dan tidak ada pertengkaran oleh sebab itu dinamakan <strong>Kole Beres</strong> yang wilayahnya sangat luas, diantaranya: Babakan Kareo, Singawada, Sadomas dan Payung.
                        </p>

                        <p>
                            Begitu lamanya memegang kekuasaan/kepemimpinan diganti nama menjadi pemerintahan Para Kuwu selama sekian jaman yang jumlahnya sampai 42 Kuwu.
                        </p>

                        <p>
                            Kemudian selanjutnya pada masa kepemimpinan jaman Islam diganti nama Desa Sindangpano dan dipimpin oleh Desa Payung yang dipimpin oleh <strong>Saidin Jati</strong> anak dari adiknya <strong>Raden Baridin</strong> yang masih batas wilayah desa itu, Desa Payung wilayahnya luas tapi yang diperintahnya masyarakat Sindangpano.
                        </p>

                        <p>
                            Ketika perintah Saidin Jati, Para Wali harus mengadakan musyawarah dengan tokoh masyarakat, bahwa Desa Kole Beres akan diganti nama jadi Desa Sindangpano yang artinya:
                        </p>

                        <ul>
                            <li><strong>Sindang</strong>: berarti Mampir</li>
                            <li><strong>Pano</strong>: berarti Panonoban (ngarereb / meuting)</li>
                        </ul>

                        <p><strong>Jadi bisa disebut Sindangpano – Panonoban.</strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection