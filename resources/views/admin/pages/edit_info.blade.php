@extends('admin/template/main')

@section('content_admin')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xxl">
                <div class="row mt-2 g-2 align-items-center">
                    @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Update Informasi Webinar & Workshop</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/informasi/_edit_info') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $info->id }}">
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Event</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nama" value="{{ $info->nama }}"
                                        id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="tanggal" value="{{ $info->tanggal }}"
                                        id="html5-date-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">HTM</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="htm" value="{{ $info->htm }}"
                                        id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Lokasi</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="lokasi" value="{{ $info->lokasi }}"
                                        id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="formFile" class="col-md-2 col-form-label">Unggah Poster</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" name="image" id="formFile" />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
