@extends('admin/template/main')

@section('content_admin')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Informasi Webinar & Workshop</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Event</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="" id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" value="" id="html5-date-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">HTM</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="" id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Lokasi</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" value="" id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="formFile" class="col-md-2 col-form-label">Unggah Poster</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" id="formFile" />
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
