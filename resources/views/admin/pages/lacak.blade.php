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
                    <a href="{{ url('lacak/tambah_lacak') }}" type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
                    </a>
                </div>
            </div>
            <div class="card mb-4">
                <h5 class="card-header">Bar Kemajuan</h5>
                <div class="card-body">
                    <div class="demo-vertical-spacing">
                        <div class="progress">
                            <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                0%
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
                                <th>Status</th>
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
        function updateProgressBar() {
            $.ajax({
                url: "{{ url('lacak/_list_lacak') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    let data = response.data; // Sesuaikan dengan format respons
                    let total = data.length;
                    let completed = data.filter(item => item.status === "Selesai").length;
                    let progress = total > 0 ? (completed / total) * 100 : 0;

                    // Update progress bar
                    $('#progress-bar')
                        .css('width', `${progress}%`)
                        .attr('aria-valuenow', progress)
                        .text(`${Math.round(progress)}%`);
                },
                error: function(error) {
                    console.error('Gagal mengambil data untuk progres bar:', error);
                }
            });
        }

        // Panggil fungsi updateProgressBar setiap kali DataTable di-refresh
        $(document).ready(function() {
            var table = $('#lacaktable').DataTable({
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
                        data: 'deskripsi'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: "id",
                        render: function(data, type, row, meta) {
                            var deleteLink =
                                `<a href="{{ url('/lacak/_delete_lacak') }}" class="btn btn-danger btn-sm delete-btn m-1" data-id="${data}"><i class="bx bx-trash"></i></a>`;
                            var editLink =
                                `<a href="{{ url('/lacak/edit_lacak') }}/${data}" class="btn btn-primary btn-sm edit-btn" data-id="${data}"><i class="bx bx-edit-alt"></i></a>`;
                            var checkLink =
                                `<a href="{{ url('/lacak/_check') }}" class="btn btn-success btn-sm check-btn m-2" data-id="${data}"><i class='bx bxs-check-square'></i></a>`;
                            return deleteLink + ' ' + editLink + checkLink;
                        }
                    }
                ]
            });

            // Refresh progress bar saat DataTable selesai di-refresh
            table.on('xhr', function() {
                updateProgressBar();
            });

            // Tambahkan event listener pada tombol check-btn
            $('#lacaktable').on('click', '.check-btn', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Data ini akan ditandai selesai!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `{{ url('lacak/_check/') }}/${id}`,
                            type: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Data berhasil ditandai selesai.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                                table.ajax.reload(); // Reload DataTable
                                updateProgressBar(); // Update progress bar
                            },
                            error: function(error) {
                                console.error('Gagal memperbarui data:', error);
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Data gagal ditandai selesai.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    }
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
        });

        // Panggil updateProgressBar pertama kali
        updateProgressBar();
    </script>
@endsection
