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
@endsection
