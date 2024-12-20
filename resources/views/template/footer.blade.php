<footer class="site-footer">
    <div class="site-footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="text-white mb-lg-0">Media Sosial TAyo</h2>
                </div>

                <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                    <ul class="social-icon d-flex justify-content-lg-end">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-twitter"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-apple"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-instagram"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-youtube"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-pinterest"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-4 pb-2">
                <h5 class="site-footer-title mb-3">Links</h5>

                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="{{ url('/') }}" class="site-footer-link">Beranda</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="{{ url('about') }}" class="site-footer-link">Tentang TAyo</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="{{ url('artists') }}" class="site-footer-link">Informasi</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="{{ url('schedule') }}" class="site-footer-link">Kalender</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="{{ url('pricing') }}" class="site-footer-link">Materi</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="{{ url('contact') }}" class="site-footer-link">Kontak</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h5 class="site-footer-title mb-3">Punya Pertanyaan?</h5>

                <p class="text-white d-flex mb-1">
                    <a href="tel: 021-345-6789" class="site-footer-link">
                        021-345-6789
                    </a>
                </p>

                <p class="text-white d-flex">
                    <a href="tayo@gmail.com" class="site-footer-link">
                        tayo@gmail.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3">Lokasi</h5>

                <p class="text-white d-flex mt-3 mb-2">
                    Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan</p>

                <a class="link-fx-1 color-contrast-higher mt-3" href="{{ url('contact') }}">
                    <span>Maps</span>
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
</footer>