@extends('template.main')

@section('content')
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
            </div>
        </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ asset('assets/video/image-carousel.mp4') }}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-text-wrap">
                        <img src="{{ asset('assets/images/logo-tayo2.jpeg') }}" class="about-image img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">Tentang TAyo</h2>

                        <p class="text-white">TAyo adalah website berbasis aplikasi yang dikembangkan sebagai solusi bagi
                            berbagai tantangan yang dihadapi mahasiswa dalam proses penyelesaian tugas akhir atau skripsi.
                            Proses ini seringkali membebani mahasiswa, baik dari segi waktu, akses terhadap bimbingan,
                            maupun ketersediaan sumber informasi yang tepat. Berdasarkan kebutuhan yang diidentifikasi,
                            aplikasi ini dirancang untuk memfasilitasi interaksi antara mahasiswa dan dosen, memberikan
                            akses terhadap materi yang relevan, serta mengelola jadwal dan tugas dengan lebih terstruktur.
                        </p>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>
@endsection
