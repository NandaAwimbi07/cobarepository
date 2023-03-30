@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Sejarah Singkat</title>
@endsection

@section('content')
    <div class="site-title spad mb-5">
        <div class="container" data-aos="fade_up">
            <div class="row justify-content-around text-start">
                <div class="col-lg-12">
                    <div class="card-title">
                        <div class="row mt-3">
                            <div class="col-lg">
                                <h3 class="text-center"> <b> <span class="text-theme-yellow">S</span>EJARAH
                                        <span class="text-theme-yellow">K</span>AMPUS</b></h3>
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class=" mt-3 mb-5" data-aos="fade-up">
                                    <p style="text-align: justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Persiapan Pendirian
                                        POLITEKNIK Pemda Banyuwangi diawali
                                        dari
                                        keinginan Pemerintah Kabupaten
                                        Banyuwangi untuk mendirikan Perguruan Tinggi Negeri di Banyuwangi.
                                        Rencana tersebut ditindaklanjuti dengan surat tugas Kepala Dinas Pendidikan
                                        Kabupaten
                                        Banyuwangi No. 800/392/429.102/2003 yang diketuai oleh Drs. H. Sabari,
                                        MM untuk melakukan kajian-kajian terkait dengan rencana tersebut sampai akhir tahun
                                        2004.
                                    </p>
                                    <p style="text-align: justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Hasil kajian
                                        tersebut akhirnya ditindaklanjuti dengan
                                        penyusunan
                                        tim perintis Politeknik oleh
                                        Bupati Banyuwangi melalui Surat Keputusan
                                        No. 188/223/Kep/429.012/2006 tentang Tim perintis dan Surat Keputusan No.
                                        188/224/Kep/429.012/2006 tentang Tim Teknis Pendirian Politeknik pemerintah
                                        Kabupaten
                                        Banyuwangi.
                                        Namun demikian rencana ini akhirnya terhenti karena adanya himbauan dari Ditjen
                                        Dikti bahwa
                                        perguruan tinggi swasta tidak diperkenankan untuk membuka program baru dan tidak
                                        diperkenankan pendirian Perguruan Tinggi baru.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 mb-2 position-relative" data-aos="fade-up">
                                <div class="success-video set-bg shadow-card"
                                    data-background="{{ asset('img/thumbnail-video.png') }}">
                                    <a class="play-btn venobox" href="https://youtu.be/4RW2gXLHFyQ" data-vbtype="video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <div class="about__text">
                                    <div class="section-title">
                                        <h2 class="text-center"> <b> <span class="text-theme-yellow">I</span>nformasi
                                                <span class="text-theme-yellow">S</span>ingkat</b></h2>
                                    </div>
                                    <p style="text-align: justify">Politeknik Negeri Banyuwangi adalah sebuah perguruan
                                        tinggi negeri politeknik yang terletak di Labanasem, Banyuwangi, Jawa Timur,
                                        Indonesia. Terdiri dari 7 program studi antara lain</p>
                                    <ul>
                                        <li><i class="fa fa-graduation-cap"></i>Teknik Rekayasa Perangkat Lunak</li>
                                        <li><i class="fa fa-graduation-cap"></i>Teknik Rekayasa Komputer</li>
                                        <li><i class="fa fa-graduation-cap"></i>Bisnis Digital</li>
                                        <li><i class="fa fa-graduation-cap"></i>Teknik Sipil</li>
                                        <li><i class="fa fa-graduation-cap"></i>Teknik Mesin</li>
                                        <li><i class="fa fa-graduation-cap"></i>Teknik Manufaktur Kapal</li>
                                        <li><i class="fa fa-graduation-cap"></i>Teknik Pengolahan Hasil Ternak</li>
                                        <li><i class="fa fa-graduation-cap"></i>Agribisnis</li>
                                        <li><i class="fa fa-graduation-cap"></i>Manajemen Bisnis Pariwisata</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
