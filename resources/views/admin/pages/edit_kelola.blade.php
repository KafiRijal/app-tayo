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
                        <h5 class="mb-0">Update Hak Akses</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/usermanagement/_edit_kelola') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Nama Pengguna</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}"
                                        id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-email-input" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email" value="{{ $user->email }}"
                                        id="html5-email-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="password" value=""
                                        id="html5-text-input" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">Role</label>
                                <div class="col-md-10">
                                    <select name="role_id" id="role" class="form-select form-control">
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
            getRole();

            function getRole() {
                $.ajax({
                    url: "{{ url('usermanagement/_role') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    success: function(data) {
                        console.log(data);

                        var provinceSelect = $('#role');
                        provinceSelect.empty();
                        provinceSelect.append('<option selected>Pilih Role</option>');
                        $.each(data, function(key, value) {
                            let selected = (value.id == "{{ $user->role_id }}") ?
                                'selected' : '';
                            provinceSelect.append('<option value="' + value.id + '" ' +
                                selected + '>' + value.role + '</option>');
                        });
                    }
                });
            }
        });
    </script>
@endsection
