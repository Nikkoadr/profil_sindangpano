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
                        <img class="img-fluid h-75" src="{{ asset('assets/img/maps.jpeg') }}" alt="Peta Desa Sindangpano">
                        <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                            <h4 class="text-white lh-base mb-0">Batas Wilayah Desa</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">Data Geografis</span> Desa Sindangpano</h1>
                <p class="mb-4">
                    Desa Sindangpano merupakan salah satu desa yang berada di wilayah Kecamatan Rajagaluh, Kabupaten Majalengka, Jawa Barat. 
                    Secara geografis, wilayah desa ini terdiri dari perbukitan, persawahan, perkebunan melinjo, serta tebing di sepanjang jalan yang telah diaspal pada tahun 2012.
                </p>
                <p class="mb-4">
                    Batas-batas wilayah Desa Sindangpano adalah: <br>
                    <strong>Utara</strong>: Desa Sadomas <br>
                    <strong>Selatan</strong>: Desa Payung <br>
                    <strong>Timur</strong>: Desa Bataragung (Bantaragung) <br>
                    <strong>Barat</strong>: Desa Teja
                </p>
                <p class="mb-4">
                    Luas wilayah Desa Sindangpano mencapai <strong>280,35 Ha</strong>. 
                    Jarak desa ini ke ibu kota provinsi (Bandung) sekitar <strong>113 km</strong>, 
                    ke ibu kota kabupaten (Majalengka) sekitar <strong>13 km</strong>, 
                    dan ke ibu kota kecamatan (Rajagaluh) sekitar <strong>6 km</strong>.
                </p>
                <p class="mb-0">
                    Tofografi dan kontur tanah desa berupa tanah pegunungan dan persawahan, dengan ketinggian 
                    <strong>500–600 m dpl</strong> serta suhu rata-rata <strong>20 °C – 30 °C</strong>.
                </p>
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
                        @forelse($berita as $key => $item)
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.{{ $key+2 }}s">
                                <div class="project-item position-relative overflow-hidden">
                                    <img class="img-fluid w-100" 
                                        src="{{ $item->gambar ? asset('storage/berita/'.$item->gambar) : asset('assets/img/logo.png') }}" 
                                        alt="Gambar {{ $item->judul }}">
                                    <a class="project-overlay text-decoration-none" href="{{ route('berita.show_berita_guest', $item->id) }}">
                                        <h4 class="text-white">{{ $item->judul }}</h4>
                                        <small class="text-white">{{ $item->tanggal ?? 'Tanpa Tanggal' }}</small>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="mb-3" style="max-width: 120px;">
                                <p class="text-muted">Belum ada berita tersedia.</p>
                            </div>
                        @endforelse
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
                        @forelse($wisata as $key => $item)
                            <div class="col-md-6 wow fadeIn" data-wow-delay="0.{{ $key+2 }}s">
                                <div class="service-item h-100 d-flex flex-column justify-content-center {{ $key % 2 == 0 ? 'bg-primary' : 'bg-light' }}">
                                    <a href="{{ route('wisata.show', $item->id) }}" class="service-img position-relative mb-4">
                                        <img class="img-fluid w-100" 
                                            src="{{ $item->gambar ? asset('storage/wisata/'.$item->gambar) : asset('assets/img/logo.png') }}" 
                                            alt="Gambar {{ $item->nama }}">
                                        <h3>{{ $item->nama }}</h3>
                                    </a>
                                    <p class="mb-0">{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="mb-3" style="max-width: 120px;">
                                <p class="text-muted">Belum ada data wisata tersedia.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <h1 class="mb-5">UMKM <span class="text-uppercase text-primary bg-light px-2">Lokal</span></h1>
        <div class="row g-4">
            @forelse($umkm as $key => $item)
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.{{ $key+1 }}s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" 
                            src="{{ $item->gambar ? asset('storage/umkm/'.$item->gambar) : asset('assets/img/logo.png') }}" 
                            alt="Gambar {{ $item->nama_umkm }}">
                        <div class="team-overlay">
                            <small class="mb-2">UMKM</small>
                            <h4 class="lh-base text-light">{{ $item->nama_umkm }}</h4>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="mb-3" style="max-width: 120px;">
                    <p class="text-muted">Belum ada data UMKM tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection