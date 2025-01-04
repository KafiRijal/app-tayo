@extends('admin/template/main')

@section('content_admin')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        @if (!empty($data))
            @if (Auth::user()->role->id == 1 || Auth::user()->role->id == 2)
                <div class="alert alert-primary alert-dismissible" role="alert">
                    Hari ini tanggal {{ $data[0]->tanggal }}! Jangan lupa ada jadwal bimbingan, ya!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hi, {{ Auth::user()->name }}</h5>
                                <p class="mb-4">
                                    Selamat datang di TAyo, teman setia perjalanan tugas akhirmu! Yuk, cek jadwal dan
                                    progres hari ini. Bareng TAyo, tugas akhir jadi lebih gampang dan teratur!
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets_admin/assets/img/logo-koala.png') }}" height="200"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
@endsection
