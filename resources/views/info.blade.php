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
            <div class="col-12 text-center">
                <h2 class="mb-4">Informasi</h1>
            </div>
            <div class="row justify-content-center">

                @if (!empty($info))
                    @foreach ($info as $inf)
                        <div class="col-md-6">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="{{ asset('images') . '/' . $inf->image }}" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Nama Event:</strong>
                                        <br>
                                        {{ $inf->nama }}
                                    </p>

                                    <p>
                                        <strong>Tanggal:</strong>
                                        <br>
                                        {{ $inf->tanggal }}
                                    </p>

                                    <p>
                                        <strong>HTM:</strong>
                                        <br>
                                        {{ $inf->htm }}
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Lokasi:</strong>
                                        <br>
                                        {{ $inf->lokasi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
