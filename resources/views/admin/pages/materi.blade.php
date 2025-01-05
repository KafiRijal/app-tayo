@extends('admin/template/main')

@section('content_admin')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-10">
                    <h4 class="fw-bold py-3 mb-4">Materi Bimbingan TA</h4>
                </div>
            </div>
            <div class="card">
                <div class="text-end card-header">
                    <a href="{{ url('materi/tambah_materi') }}" type="button" class="btn btn-primary text-end">
                        <span class="tf-icons bx bx-plus"></span>Tambah
                    </a>
                </div>
                <div class="table-responsive text-nowrap m-3">
                    <table id="materitable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Topik Bimbingan</th>
                                <th>Deskripsi</th>
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
            $('#materitable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: "{{ url('materi/_list_materi') }}",
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
                        data: 'topik',
                    },
                    {
                        data: 'deskripsi',
                    },
                    {
                        data: "id",
                        render: function(data, type, row, meta) {
                            var deleteLink =
                                `<a href="{{ url('/materi/_delete_materi') }}" class="btn btn-danger btn-sm delete-btn m-2" data-id="${data}"><i class="bx bx-trash"> </i></a>`;
                            var editLink =
                                `<a href="{{ url('/materi/edit_materi') }}/${data}" class="btn btn-primary btn-sm edit-btn" data-id="${data}"><i class="bx bx-edit-alt"></i></a>`;
                            return deleteLink + ' ' + editLink;
                        }
                    }
                ]
            });
        });
        $('#materitable').on('click', '.delete-btn', function(e) {
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
                        url: `{{ url('materi/_delete_materi/') }}/${id}`,
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
                            $('#materitable').DataTable().ajax.reload();
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
