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


    <section class="artists-section section-padding" id="section_3">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Informasi</h1>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('assets/images/poster1.png') }}" class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nama Event:</strong>
                                <br>
                                Leadership Dynamics A Workshop for Growth
                            </p>

                            <p>
                                <strong>Tanggal:</strong>
                                <br>
                                28 Desember 2024
                            </p>

                            <p>
                                <strong>HTM:</strong>
                                <br>
                                Free
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Lokasi:</strong>
                                <br>
                                Gedung Nasional Indonesia
                            </p>
                        </div>
                    </div>
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('assets/images/poster4.png') }}" class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nama Event:</strong>
                                <br>
                                Webinar Bisnis "Powering Advenced AI"
                            </p>

                            <p>
                                <strong>Tanggal:</strong>
                                <br>
                                25 Desember 2024
                            </p>

                            <p>
                                <strong>HTM:</strong>
                                <br>
                                Free
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Lokasi:</strong>
                                <br>
                                Jl. Serma Lion Kosong No 1
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('assets/images/poster2.png') }}" class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nama Event:</strong>
                                <br>
                                Webinar Digital Marketing
                            </p>

                            <p>
                                <strong>Tanggal:</strong>
                                <br>
                                27 Desember 2024
                            </p>

                            <p>
                                <strong>HTM:</strong>
                                <br>
                                Free
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Lokasi:</strong>
                                <br>
                                Jl. Cempaka Raya No 30
                            </p>
                        </div>
                    </div>

                    <div class="artists-thumb">
                        <img src="{{ asset('assets/images/poster3.png') }}" class="artists-image img-fluid">

                        <div class="artists-hover">
                            <p>
                                <strong>Nama Event:</strong>
                                <br>
                                Creative Copywriting Workshop
                            </p>

                            <p>
                                <strong>Tanggal:</strong>
                                <br>
                                25 Desember 2024
                            </p>

                            <p>
                                <strong>HTM:</strong>
                                <br>
                                Free
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Lokasi:</strong>
                                <br>
                                Danau UI ST. Buntu 12
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Kalender</h1>

                        <div class="table-responsive">
                            <table class="schedule-table table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">2024</th>

                                        <th scope="col">Pekan 1</th>

                                        <th scope="col">Pekan 2</th>

                                        <th scope="col">Pekan 3</th>

                                        <th scope="col">Pekan 4</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">Oktober</th>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 1 - 5</p>

                                            <p>Pengajuan Judul dan Topik Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Bimbingan</h3>

                                            <p class="mb-2">Tanggal 7 - 12</p>

                                            <p>Bimbingan Tugas Akhir #1</p>
                                        </td>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Seminar</h3>

                                            <p class="mb-2">Tanggal 14-19</p>

                                            <p>Seminar LPPM STT NF #1</p>
                                        </td>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Workshop</h3>

                                            <p class="mb-2">Tanggal 21 - 26</p>

                                            <p>Workshop LPPM STT NF #1</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">November</th>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Bimbingan</h3>

                                            <p class="mb-2">Tanggal 4 - 9</p>

                                            <p>Bimbingan Tugas Akhir #2</p>
                                        </td>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Seminar</h3>

                                            <p class="mb-2">Tanggal 11-16</p>

                                            <p>Seminar LPPM STT NF #2</p>
                                        </td>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Workshop</h3>

                                            <p class="mb-2">Tanggal 18 - 23</p>

                                            <p>Workshop LPPM STT NF #2</p>
                                        </td>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Bimbingan</h3>

                                            <p class="mb-2">Tanggal 25 - 30</p>

                                            <p>Bimbingan Tugas Akhir #3</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Desember</th>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 2 - 7</p>

                                            <p>Pendaftaran Ujian Proposal Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 9 - 14</p>

                                            <p>Verifikasi dan Validasi Pendaftaran Ujian Proposal Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 16 - 21</p>

                                            <p>Pelaksanaan Ujian Proposal Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 23 - 28</p>

                                            <p> Pendaftaran Ujian Hasil Tugas Akhir</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Materi</h2>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3>1. <small>Pemilihan dan Perumusan Topik</small></h3>

                                <p>Bimbingan Tugas Akhir ke-1 ini, tersedia:</p>
                            </div>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Slide Materi</li>

                            <li class="pricing-list-item">Video Penjelasan Materi</li>
                        </ul>

                        <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Lihat Materi</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="16" cy="16" r="15.5"></circle>
                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3>2. <small>Penyusunan Proposal</small></h3>

                                <p>Bimbingan Tugas Akhir ke-2 ini, tersedia:</p>
                            </div>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Slide Materi</li>

                            <li class="pricing-list-item">Video Penjelasan Materi</li>
                        </ul>

                        <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Lihat Materi</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="16" cy="16" r="15.5"></circle>
                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Punya Pertanyaan?</h2>

                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                            role="tablist">
                            <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactForm" type="button" role="tab"
                                aria-controls="nav-ContactForm" aria-selected="false">
                                <h5>Bertanya</h5>
                            </button>

                            <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactMap" type="button" role="tab"
                                aria-controls="nav-ContactMap" aria-selected="false">
                                <h5>Lokasi</h5>
                            </button>
                        </div>
                    </nav>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                            aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                role="form">
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="contact-name" id="contact-name"
                                                class="form-control" placeholder="Nama Lengkap" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="contact-email" id="contact-email"
                                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email"
                                                required>
                                        </div>
                                    </div>

                                    <input type="text" name="contact-company" id="contact-company"
                                        class="form-control" placeholder="Judul Tugas Akhir" required>

                                    <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Pertanyaan"></textarea>

                                    <div class="col-lg-12 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                            aria-labelledby="nav-ContactMap-tab">
                            <iframe class="google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175618529776!2d106.83004867355626!3d-6.352919162148878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sen!2sid!4v1734573334362!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
