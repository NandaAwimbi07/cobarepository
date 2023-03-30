@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Peraturan Akademik</title>
@endsection

@section('content')
    {{-- Peraturan akademi begin --}}
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                {{-- Row Header --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="pb-4 mt-3">
                            <h4 class="text-center"><b> <span class="text-theme-yellow">P</span>eraturan <span
                                        class="text-theme-yellow">A</span>kademik <span
                                        class="text-theme-yellow">P</span>oliwangi</b></h4>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                        </div>
                    </div>
                </div>
                {{-- Row Content --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div>
                            <h4 class="mb-1 fw-semi-bold"><span class="text-theme-yellow">P</span>eraturan
                                <span class="text-theme-yellow">A</span>kademik <span
                                    class="text-theme-yellow">K</span>ampus :
                            </h4>
                            <label for="" class="fw-medium mt-2 mb-1">Berikut peraturan yang terdapat pada kampus
                                :</label>
                        </div>
                        <div class="pb-2 text-justify">
                            <ol>
                                <li> Beban studi mahasiswa Tingkat Persiapan Bersama selama satu tahun sebanyak 48 SKS
                                    yang dibagi menjadi dua semester.</li>
                                <li> Beban studi tersebut berupa paket mata kuliah yang sama untuk seluruh mahasiswa.
                                </li>
                                <li> Beban studi lebih lanjut ditentukan oleh indeks prestasi kumulatif (IPK).</li>
                            </ol>
                        </div>

                        <div>
                            <label for="" class="fw-medium mt-2 mb-1">Masa Studi :</label>
                        </div>
                        <div class="pb-4 text-justify">
                            <ol>
                                <li> Masa studi maksimum 6 semester dan waktu cuti akademik tidak diperhitungkan
                                    dalam
                                    penentuan batas waktu studi.</li>
                                <li> Waktu Cuti dapat dilakukan setelah melewati perkuliahaan 1 semester</li>
                            </ol>
                        </div>

                        <div>
                            <label for="" class="fw-medium mt-2 mb-1">Sumbangan Penyelenggaraan Pendidikan
                                (SPP) :</label>
                        </div>
                        <div class="pb-4 text-justify">
                            <ol>
                                <li>Tiap Mahasiswa wajib membayar UANG KULIAH pada waktu yang telah ditentukan.</li>
                                <li>SPP terdiri dari 2 komponen yaitu:</li>
                                <ul>
                                    <li>=> Biaya Peningkatan Mutu Pendidikan (BPMP)</li>
                                    <li>=> Biaya Penyelenggaraan Mata Kuliah (BPMK)</li>
                                </ul>
                                <li>Jumlah uang SPP ditetapkan dengan Keputusan Direktur poliwangi.</li>
                                <li>Mahasiswa yang sedang menjalani cuti akademik wajib membayar BPMP.</li>
                                <li>Mahasiswa yang tidak membayar SPP sampai batas waktu yang ditentukan dikenai sanksi
                                    non aktif dan atau pemutusan pelayanan administrasi.</li>
                                <li>Sanksi akademik dapat berupa kehilangan hak mengikuti perkuliahan, pengguguran
                                    perolehan SKS pada semester bersangkutan, penangguhan kelulusan, pemutusan studi
                                    sementara (skorsing) atau dikeluarkan dari
                                    poliwangi dengan Keputusan poliwangi.</li>
                                <li>Pemutusan pelayanan administrasi ialah kehilangan hak untuk memperoleh semua jenis
                                    pelayanan yang berkaitan dengan akademik dan kemahasiswaan.</li>
                            </ol>
                        </div>

                        {{--  --}}
                    </div>
                </div>
            </div>
    </section>
    {{-- Peraturan akademi end --}}
@endsection
