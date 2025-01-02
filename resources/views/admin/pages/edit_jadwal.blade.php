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
                        <h5 class="mb-0">Update Jadwal Bimbingan TA</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/jadwal/_edit_jadwal') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $jadwal_bimbingan->id }}">
                            <div class="mb-3 row">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="tanggal"
                                        value="{{ $jadwal_bimbingan->tanggal }}" id="html5-date-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-time-input" class="col-md-2 col-form-label">Waktu</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="time" name="waktu"
                                        value="{{ $jadwal_bimbingan->waktu }}" id="html5-time-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Lokasi</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="lokasi"
                                        value="{{ $jadwal_bimbingan->lokasi }}" id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Dosen Pembimbing</label>
                                <div class="col-md-10">
                                    <select name="dosen_id" id="dosen" class="form-select form-control">
                                    </select>
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

@section('template_scripts')
    <script>
        $(document).ready(function() {
            let token = $('meta[name="csrf-token"]').attr('content');
            getDosen();

            function getDosen() {
                $.ajax({
                    url: "{{ url('jadwal/_dosen') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    success: function(data) {
                        console.log(data);

                        var provinceSelect = $('#dosen');
                        provinceSelect.empty();
                        provinceSelect.append('<option selected>Pilih Dosen</option>');
                        $.each(data, function(key, value) {
                            let selected = (value.id == "{{ $jadwal_bimbingan->dosen_id }}") ?
                                'selected' : '';
                            provinceSelect.append('<option value="' + value.id + '" ' +
                                selected + '>' + value.dosen + '</option>');
                        });
                    }
                });
            }
        });
    </script>
@endsection
