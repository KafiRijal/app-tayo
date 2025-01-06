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

    <section class="pricing-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Materi</h2>
                </div>
                @if (!empty($materi))
                    @php
                        $id = 1; // Mulai dari 1
                    @endphp
                    @foreach ($materi as $mtr)
                        <div class="col-lg-6 col-12 mb-3">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3>{{ $id }}. <small>{{ $mtr->topik }}</small></h3>
                                        @php
                                            $id++;
                                        @endphp
                                        <p>{{ $mtr->deskripsi }}</p>
                                    </div>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item"><a target="_blank"
                                            href="{{ asset('files') . '/' . $mtr->file }}">File
                                            Materi</a>
                                    </li>

                                    <li class="pricing-list-item"><a target="_blank"
                                            href="{{ asset('videos') . '/' . $mtr->video }}">Video
                                            Materi</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
