@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Fasilitas Jurusan</title>
@endsection

@section('content')
    {{-- Konten Fasilitas --}}
    <section class="spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                {{-- Row Header --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="pb-4 mt-3">
                            <h4 class="text-center"><b> <span class="text-theme-yellow">F</span>ASILITAS <span
                                        class="text-theme-yellow">J</span>URUSAN</b></h4>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                        </div>
                    </div>
                </div>
                {{-- Ruangan Admin Jurusan --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">R</span>uangan <span
                                    class="text-theme-yellow">A</span>dmin <span class="text-theme-yellow">J</span>urusan
                            </h3>
                            <label class="mt-1" for="">Ruangan admin memudahkan mahasiswa dalam mencari info
                                terkait jurusan dan segala kebutuhan perkuliahan yang lain.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/admin-jurusan.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/admin-jurusan-2.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Lab Jurusan --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">L</span>ab <span
                                    class="text-theme-yellow">J</span>urusan
                            </h3>
                            <label class="mt-1" for="">Di jurusan terdapat banyak sekali lab, diantaranya lab
                                Program 1, Program 2, Program 3, Basdat, Multimedia dan Hardware.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/lab-jurusan-1.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/lab-jurusan-2.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/lab-jurusan-3.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Taman --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">T</span>aman <span
                                    class="text-theme-yellow">J</span>urusan
                            </h3>
                            <label class="mt-1" for="">Taman adalah aset dari sumber segala ketenangan, maka dari
                                itu banyak mahasiswa yang sering bercengkrama satu sama lain disana.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/taman-jurusan-4.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/taman-jurusan-1.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/taman-jurusan-2.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/taman-jurusan-3.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Wifi Corner --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">W</span>ifi <span
                                    class="text-theme-yellow">C</span>orner
                            </h3>
                            <label class="mt-1" for="">Kamu butuh koneksi interner? atau mau ngobrol bareng
                                sambil nugas, Wifi corner adalah tempatnya.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/wifi-corner-1.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card" src="{{ asset('img/fasilitas/wifi-corner-2.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Kantin Jurusan --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">K</span>antin <span
                                    class="text-theme-yellow">J</span>urusan
                            </h3>
                            <label class="mt-1" for="">KOKI adalah salah satu usaha yang dirintis oleh HIMA TI,
                                yang menyediakan berbagai makanan untuk menemani kamu seharian di kampus.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/kantin-jurusan-1.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Mushola --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">M</span>ushola <span
                                    class="text-theme-yellow">K</span>ampus
                            </h3>
                            <label class="mt-1" for="">Dengan dekat tempat ibadah maka hati menjadi tenang,
                                apalagi beribadah bersama sahabat se perjuangan ya kan.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/mushola-kampus-1.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/mushola-kampus-2.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/mushola-kampus-3.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Lapangan Basket --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">L</span>apangan <span
                                    class="text-theme-yellow">B</span>asket
                            </h3>
                            <label class="mt-1" for="">Teruntuk kamu yang suka berolahraga, yuk sparing Basket
                                bareng.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/lapangan-basket-1.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/lapangan-basket-2.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
                {{-- Area Parkir --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11 text-center">
                        <div class="pb-4">
                            <h3 class="text-center fw-semi-bold"><span class="text-theme-yellow">T</span>empat <span
                                    class="text-theme-yellow">P</span>arkir
                            </h3>
                            <label class="mt-1" for="">Teruntuk kamu mahasiswa TI kalau mau parkir di belakang
                                HIMA TI sini yah.</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-11">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/tempat-parkir-1.jpg') }}" />
                                </div>
                                <div class="col-lg-3 mb-3 my-auto" data-aos="zoom-out-down">
                                    <img class="card shadow-card"
                                        src="{{ asset('img/fasilitas/tempat-parkir-2.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <hr class="hr-theme">
                </center>
            </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'));
        lightGallery(document.getElementById('lightgallery1'));
        $("#fasilitas").addClass("active");
    </script>
@endsection
