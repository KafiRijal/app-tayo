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
                    @if (Auth::user()->role->id == 1)
                        <li class="menu-item">
                            <a href="{{ url('lacak/list_lacak') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-list-check"></i>
                                <div data-i18n="Form Elements">Lacak & Daftar TA</div>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->role->id == 1 || Auth::user()->role->id == 2)
                        <li class="menu-item">
                            <a href="{{ url('jadwal/list_jadwal') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bxs-graduation"></i>
                                <div data-i18n="Form Layouts">Jadwal TA</div>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->role->id == 3)
                        <li class="menu-item">
                            <a href="{{ url('informasi/list_info') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-globe"></i>
                                <div data-i18n="Form Layouts">Informasi</div>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->role->id == 3 || Auth::user()->role->id == 2)
                        <li class="menu-item">
                            <a href="{{ url('materi/list_materi') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-book"></i>
                                <div data-i18n="Form Layouts">Materi</div>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->role->id == 3)
                        <li class="menu-item">
                            <a href="{{ url('usermanagement/kelola') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                                <div data-i18n="Form Layouts">Kelola Akses</div>
                            </a>
                        </li>
                    @endif
                </ul>
            </aside>
            <!-- / Menu -->
