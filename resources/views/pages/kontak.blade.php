@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Kontak Jurusan</title>
@endsection

@section('content')
    {{-- Konten Info Kontak --}}
    <section class="spad">
        <div class="container">
            <div class="card-title about__text">
                {{-- Row Header --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="pb-4 mt-3">
                            <h4 class="text-center"><b> <span class="text-theme-yellow">K</span>ONTAK <span
                                        class="text-theme-yellow">I</span>NFORMASI</b></h4>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                        </div>
                    </div>
                </div>
                {{-- Row Content --}}
                <div class="row justify-content-around">
                    <div class="col-lg-4 mb-3" data-aos="zoom-out-down">
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker"></i> Kampus</h6>
                                <p>Jalan Raya Jember KM 13 Banyuwangi 68461, Jawa Timur - Indonesia</p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone"></i> Phone</h6>
                                <p><span>+62 (0333) 636780</span></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope"></i>Email Kampus</h6>
                                <p>poliwangi@poliwangi.ac.id</p>
                                <p>humas@poliwangi.ac.id</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mb-3" data-aos="zoom-out-down">
                        <center>
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="300" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=politeknik%20negeri%20banyuwangi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                        href="https://www.whatismyip-address.com"></a><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 500px;
                                            width: 300px;
                                        }
                                    </style><a href="https://www.embedgooglemap.net">embedding google maps in web page</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 500px;
                                            width: 300px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
    </section>
@endsection
