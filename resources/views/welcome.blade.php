@extends('layouts.welcome.master')
@section('content')
<div class="container-fluid pb-5 hero-header bg-light mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <h1 class="display-1 mb-4 animated slideInRight">Desa <span class="text-primary">Sindangpano</span><br>
                    Harmoni Alam & Budaya</h1>
                <h5 class="d-inline-block border border-2 border-white py-3 px-5 mb-0 animated slideInRight">
                    Desa Mandiri, Lestari & Berdaya Sejak Dahulu</h5>
            </div>
            <div class="col-lg-6">
                <div class="owl-carousel header-carousel animated fadeIn">
                    <img class="img-fluid" src="{{ asset('assets/img/sindangpano-3.jpeg') }}" alt="Pemandangan Alam">
                    <img class="img-fluid" src="{{ asset('assets/img/sindangpano-2.jpeg') }}" alt="Kegiatan Warga">
                    <img class="img-fluid" src="{{ asset('assets/img/sindangpano-1.jpeg') }}" alt="Pertanian Lokal">
                </div>
            </div>
        </div>
        <div class="row g-5 animated fadeIn">
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-leaf text-primary"></i>
                    </div>
                    <h5 class="lh-base mb-0">Pertanian Berkelanjutan</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-tree text-primary"></i>
                    </div>
                    <h5 class="lh-base mb-0">Alam yang Asri & Lestari</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <h5 class="lh-base mb-0">Masyarakat Gotong Royong</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-handshake text-primary"></i>
                    </div>
                    <h5 class="lh-base mb-0">Kearifan Lokal & Budaya</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="Kegiatan Masyarakat">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75" src="{{ asset('assets/img/maps.jpeg') }}" alt="Alam Sindangpano">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">Batas Wilayah Desa</h4>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">Sejarah</span> Desa Sindangpano</h1>
                <p class="mb-4">
                    Desa Sindangpano sudah ada sejak masa Kerajaan Hindu, khususnya pada masa kejayaan Kerajaan Pajajaran. Awalnya dikenal dengan nama Kole Beres, dipimpin oleh Kuwu pertama Prabu Atma Lengkara (Guriang Katuran) yang tinggal di Komplek Kepel. Kepemimpinan dilanjutkan oleh Guriang Raja Polah dan kemudian oleh para Demang: Toplak, Karwi, Centong (Gagak Resi), dan Candranala, sebelum abad ke-14.</p>
                <p class="mb-4">Pada tahun 1425 M, saat penyebaran Islam oleh Wali Sanga di Jawa Barat, wilayah ini disinggahi dan dipimpin oleh Pangeran Panunggelan, keturunan Embah Kuwu Sangkan dari Cirebon Girang. Di masa ini, masyarakat hidup aman dan tentram, sehingga wilayah Kole Beres meliputi Babakan Kareo, Singawada, Sadomas, dan Payung.</p>
                <p class="mb-5">Kepemimpinan berlanjut ke para Kuwu selama beberapa generasi hingga mencapai 42 Kuwu. Pada masa Islam, wilayah ini akhirnya dinamakan Desa Sindangpano, dengan arti tempat singgah dan musyawarah, dipimpin oleh Saidin Jati, anak dari adik Raden Baridin.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h1 class="mb-5">Mengapa <span class="text-uppercase text-primary bg-light px-2">Sindangpano</span> Diminati?</h1>
        </div>
        <div class="row g-5 align-items-center text-center">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-history fa-5x text-primary mb-4"></i>
                <h4>Sejarah & Budaya Kuat</h4>
                <p class="mb-0">Desa yang memiliki nilai historis serta budaya yang masih dijaga dan diwariskan antargenerasi.</p>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-tree fa-5x text-primary mb-4"></i>
                <h4>Lingkungan Asri</h4>
                <p class="mb-0">Dikelilingi alam hijau, sawah, dan pegunungan, menjadikan Sindangpano tempat yang sejuk dan nyaman.</p>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-5x text-primary mb-4"></i>
                <h4>Masyarakat Ramah</h4>
                <p class="mb-0">Warga yang menjunjung tinggi nilai gotong royong dan keramahtamahan kepada tamu maupun pendatang.</p>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-seedling fa-5x text-primary mb-4"></i>
                <h4>Pertanian Unggulan</h4>
                <p class="mb-0">Sektor pertanian yang terus dikembangkan dengan teknologi dan kearifan lokal sebagai basisnya.</p>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-handshake fa-5x text-primary mb-4"></i>
                <h4>Kearifan Lokal</h4>
                <p class="mb-0">Beragam tradisi, adat istiadat, serta praktik-praktik lokal yang menguatkan identitas desa.</p>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-chart-line fa-5x text-primary mb-4"></i>
                <h4>Menuju Desa Mandiri</h4>
                <p class="mb-0">Desa terus berkembang melalui program pembangunan berkelanjutan yang inklusif dan partisipatif.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="container mt-5">
        <div class="row g-0">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                    <h1 class="text-white mb-5">Berita <span class="text-uppercase text-primary bg-light px-2">Terbaru</span></h1>
                    <h4 class="text-white mb-0"><span class="display-1">6</span> Informasi Terkini</h4>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                        <div class="project-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/berita/berita-1.jpeg') }}" alt="">
                            <a class="project-overlay text-decoration-none" href="#">
                                <h4 class="text-white">Peringatan HUT RI ke-80</h4>
                                <small class="text-white">Agustus 2025</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="project-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/berita/berita-2.jpeg') }}" alt="">
                            <a class="project-overlay text-decoration-none" href="#">
                                <h4 class="text-white">Kerja Bakti Bersih Desa</h4>
                                <small class="text-white">Agustus 2025</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                        <div class="project-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                            <a class="project-overlay text-decoration-none" href="#">
                                <h4 class="text-white">Launching Produk BUMDes</h4>
                                <small class="text-white">Juli 2025</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="project-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                            <a class="project-overlay text-decoration-none" href="#">
                                <h4 class="text-white">Pendaftaran BLT Dana Desa</h4>
                                <small class="text-white">Sedang Berlangsung</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="project-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/project-5.jpg') }}" alt="">
                            <a class="project-overlay text-decoration-none" href="#">
                                <h4 class="text-white">Pelatihan Digital UMKM</h4>
                                <small class="text-white">Juni 2025</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="project-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/berita/berita-3.jpeg') }}" alt="">
                            <a class="project-overlay text-decoration-none" href="#">
                                <h4 class="text-white">Kegiatan Masyarakat</h4>
                                <small class="text-white">Juli 2025</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Wisata <span class="text-uppercase text-primary bg-light px-2">Desa</span></h1>
                <p>Desa Sindangpano memiliki potensi wisata alam yang indah dan masih asri. Dari hamparan sawah hijau, bendungan, hingga waduk yang menenangkan, setiap sudut desa menyajikan pemandangan yang memanjakan mata.</p>
                <p class="mb-5">Selain itu, terdapat destinasi wisata alam Cipeundeuy Endah yang menawarkan berbagai aktivitas seru seperti rafting, tubing, hingga glamping. Desa ini menjadi pilihan tepat untuk berlibur bersama keluarga sekaligus menikmati suasana pedesaan yang damai.</p>
            </div>
            <div class="col-lg-7">
                <div class="row g-0">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                            <a href="#" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/wisata-1.jpeg') }}" alt="">
                                <h3>Sawah panenjoan</h3>
                            </a>
                            <p class="mb-0">Nikmati keindahan hamparan sawah hijau dengan latar pegunungan yang menyejukkan mata. Tempat ini cocok untuk bersantai sambil menikmati suasana pedesaan yang asri serta menjadi spot favorit untuk berfoto.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                            <a href="#" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/wisata-2.jpeg') }}" alt="">
                                <h3>Bendungan Sindangpano</h3>
                            </a>
                            <p class="mb-0">Bendungan ini tidak hanya berfungsi sebagai sumber irigasi, tetapi juga menjadi daya tarik wisata dengan panorama air yang tenang dikelilingi pepohonan rindang. Pengunjung dapat menikmati suasana alami sekaligus bersantai bersama keluarga.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                            <a href="#" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/wisata-3.jpeg') }}" alt="">
                                <h3>Waduk Sindangpano</h3>
                            </a>
                            <p class="mb-0">Objek wisata air yang menjadi pusat aktivitas warga sekaligus tempat rekreasi menarik. Pengunjung bisa menikmati pemandangan waduk, memancing, atau sekadar duduk santai menikmati semilir angin di tepi waduk.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                            <a href="#" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/wisata-4.jpeg') }}" alt="">
                                <h3>Cipeundeuy Endah</h3>
                            </a>
                            <p class="mb-0">Destinasi wisata alam yang populer dengan berbagai aktivitas seru seperti rafting, tubing, hingga glamping/villa. Cocok untuk pecinta petualangan maupun keluarga yang ingin menikmati liburan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <h1 class="mb-5">UMKM <span class="text-uppercase text-primary bg-light px-2">Lokal</span>
            </h1>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/roti-1.jpeg') }}" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">UMKM</small>
                            <h4 class="lh-base text-light">Roti Bakar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/melinjo-1.jpeg') }}" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">UMKM</small>
                            <h4 class="lh-base text-light">Kerajinan Rotan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/melinjo-1.jpeg') }}" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">UMKM</small>
                            <h4 class="lh-base text-light">Emping Melinjo</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/melinjo-1.jpeg') }}" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">UMKM</small>
                            <h4 class="lh-base text-light">Keripik Gadung</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection