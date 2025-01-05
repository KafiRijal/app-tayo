@extends('admin/template/main')

@section('content_admin')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-10">
                    <h4 class="fw-bold py-3 mb-4">Kelola Hak Akses</h4>
                </div>
            </div>
            <div class="card">
                <div class="text-end card-header">
                    <a href="{{ url('usermanagement/tambah_kelola') }}" type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
                    </a>
                </div>
                <div class="table-responsive text-nowrap m-3">
                    <table id="usertable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                <th>Role</th>
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
            $('#usertable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: "{{ url('usermanagement/_kelola') }}",
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
                        data: 'name',
                    },
                    {
                        data: 'email',
                    },
                    {
                        data: 'role',
                    },
                    {
                        data: "id",
                        render: function(data, type, row, meta) {
                            var deleteLink =
                                `<a href="{{ url('/usermanagement/_delete_kelola') }}" class="btn btn-danger btn-sm delete-btn m-2" data-id="${data}"><i class="bx bx-trash"> </i></a>`;
                            var editLink =
                                `<a href="{{ url('/usermanagement/edit_kelola') }}/${data}" class="btn btn-primary btn-sm edit-btn" data-id="${data}"><i class="bx bx-edit-alt"></i></a>`;
                            return deleteLink + ' ' + editLink;
                        }
                    }
                ]
            });
        });
        $('#usertable').on('click', '.delete-btn', function(e) {
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
                        url: `{{ url('usermanagement/_delete_kelola/') }}/${id}`,
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
                            $('#usertable').DataTable().ajax.reload();
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
