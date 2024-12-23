@extends('admin/template/main')

@section('content_admin')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hai, Kafi Rijal Rabbani Sopian</h5>
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
