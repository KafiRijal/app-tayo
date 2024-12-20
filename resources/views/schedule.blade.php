@extends('template.main')

@section('content')
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
            </div>
        </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ asset('assets/video/image-carousel.mp4') }}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </section>
    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Kalender</h1>

                        <div class="table-responsive">
                            <table class="schedule-table table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">2024</th>

                                        <th scope="col">Pekan 1</th>

                                        <th scope="col">Pekan 2</th>

                                        <th scope="col">Pekan 3</th>

                                        <th scope="col">Pekan 4</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">Oktober</th>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 1 - 5</p>

                                            <p>Pengajuan Judul dan Topik Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Bimbingan</h3>

                                            <p class="mb-2">Tanggal 7 - 12</p>

                                            <p>Bimbingan Tugas Akhir #1</p>
                                        </td>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Seminar</h3>

                                            <p class="mb-2">Tanggal 14-19</p>

                                            <p>Seminar LPPM STT NF #1</p>
                                        </td>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Workshop</h3>

                                            <p class="mb-2">Tanggal 21 - 26</p>

                                            <p>Workshop LPPM STT NF #1</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">November</th>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Bimbingan</h3>

                                            <p class="mb-2">Tanggal 4 - 9</p>

                                            <p>Bimbingan Tugas Akhir #2</p>
                                        </td>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Seminar</h3>

                                            <p class="mb-2">Tanggal 11-16</p>

                                            <p>Seminar LPPM STT NF #2</p>
                                        </td>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Workshop</h3>

                                            <p class="mb-2">Tanggal 18 - 23</p>

                                            <p>Workshop LPPM STT NF #2</p>
                                        </td>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Bimbingan</h3>

                                            <p class="mb-2">Tanggal 25 - 30</p>

                                            <p>Bimbingan Tugas Akhir #3</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Desember</th>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 2 - 7</p>

                                            <p>Pendaftaran Ujian Proposal Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #EDC7B7">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 9 - 14</p>

                                            <p>Verifikasi dan Validasi Pendaftaran Ujian Proposal Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #EEE2DC">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 16 - 21</p>

                                            <p>Pelaksanaan Ujian Proposal Tugas Akhir</p>
                                        </td>

                                        <td style="background-color: #BAB2B5">
                                            <h3>Tugas Akhir</h3>

                                            <p class="mb-2">Tanggal 23 - 28</p>

                                            <p> Pendaftaran Ujian Hasil Tugas Akhir</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
