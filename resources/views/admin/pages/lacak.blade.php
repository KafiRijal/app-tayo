@extends('admin/template/main')

@section('content_admin')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-10">
                    <h4 class="fw-bold py-3 mb-4">Lacak & Daftar TA</h4>
                </div>
                <div class="col-2 py-2">
                    <a href="{{ url('dashboard/lacak/form_lacak') }}" type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
                    </a>
                </div>
            </div>
            <div class="card mb-4">
                <h5 class="card-header">Bar Kemajuan</h5>
                <div class="card-body">
                    <div class="demo-vertical-spacing">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">
                                25%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <h5 class="card-header">Daftar Tugas</h5>
                <div class="table-responsive text-nowrap m-3">
                    <table id="lacaktable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Deskripsi Tugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts')
    <script>
        $(document).ready(function() {
            $('#lacaktable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: "{{ url('lacak/_list_lacak') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [{
                        data: null,
                        className: 'text-center',
                        orderable: true,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'deskripsi',
                    },
                    {
                        data: "id",
                        render: function(data, type, row, meta) {
                            var deleteLink =
                                `<a href="{{ url('/lacak/_delete_lacak') }}" class="btn btn-danger btn-sm delete-btn m-2" data-id="${data}"><i class="bx bx-trash"> </i></a>`;
                            var editLink =
                                `<a href="{{ url('/lacak/edit_lacak') }}/${data}" class="btn btn-primary btn-sm edit-btn" data-id="${data}"><i class="bx bx-edit-alt"></i></a>`;
                            return deleteLink + ' ' + editLink;
                        }
                    }
                ]
            });
        });
        $('#lacaktable').on('click', '.delete-btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('lacak/_delete_lacak/') }}/${id}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil dihapus.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                            $('#lacaktable').DataTable().ajax.reload();
                        },
                        error: function(error) {
                            console.error('Gagal menghapus data:', error);
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal dihapus Karena Id Sudah digunakan',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
