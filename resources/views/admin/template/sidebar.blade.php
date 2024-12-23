            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ url('dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('assets/images/logo-tayo.png') }}" width="40px" height="50px"
                                alt="Tabler" class="navbar-brand-image">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">TAyo</span>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="{{ url('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu</span></li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="{{ url('dashboard/lacak') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div data-i18n="Form Elements">Lacak & Daftar TA</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('dashboard/jadwal') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-graduation"></i>
                            <div data-i18n="Form Layouts">Jadwal TA</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('dashboard/informasi') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-globe"></i>
                            <div data-i18n="Form Layouts">Informasi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('dashboard/materi') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book"></i>
                            <div data-i18n="Form Layouts">Materi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('dashboard/kelola') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                            <div data-i18n="Form Layouts">Kelola Akses</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->
