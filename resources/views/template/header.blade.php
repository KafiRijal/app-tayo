        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <img src="{{ asset('assets/images/logo-koala2.png') }}" width="25px" height="25px"
                                alt="Tabler" class="navbar-brand-image me-1">
                            <strong class="text-dark">Kelompok 18 Koala</strong>
                            <img src="{{ asset('assets/images/logo-koala2.png') }}" width="25px" height="25px"
                                alt="Tabler" class="navbar-brand-image ms-1">
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo-tayo.png') }}" width="40px" height="50px" alt="Tabler"
                        class="navbar-brand-image">
                    TAyo
                </a>

                <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Masuk</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('tentang') }}">Tentang TAyo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('info') }}">Informasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('kalender') }}">Kalender</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('materi') }}">Materi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('kontak') }}">Kontak</a>
                        </li>
                    </ul>

                    <a href="{{ url('auth/login') }}" class="btn custom-btn d-lg-block d-none">Masuk</a>
                </div>
            </div>
        </nav>
