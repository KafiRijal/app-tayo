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
                        <div class="col-lg-6 col-12">
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

                                <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                                    <span>Lihat Materi</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="16" cy="16" r="15.5"></circle>
                                            <line x1="10" y1="18" x2="16" y2="12"></line>
                                            <line x1="16" y1="12" x2="22" y2="18"></line>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
