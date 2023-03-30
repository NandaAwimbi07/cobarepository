@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Beranda</title>
@endsection

@section('content')
    <!-- hero slider -->
    <section id="home-section" class="hero-section">
        <div class="row">
            <div class="col-lg-12">
                {{-- Video Player Beranda --}}
                <video autoplay muted loop id="myVideo" class="video-home">
                    <source src="{{ asset('videos/video-poliwangi.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <div class="news-updates">
        <div class="container">
            <div class="row">
                <!-- Data Event -->
                <div class="col-lg-4 mb-5">
                    <div class="card-pengumuman">
                        <h4 class="pb-2 text-center fw-semi-bold">Event Jurusan</h4>
                        @foreach ($dataEvent as $item)
                            <div class="post-entry-big mb-1">
                                <div class="icon-tanggal me-2">
                                    <div class="meta-date text-center">
                                        <span class="day">{{ date('d', strtotime($item->tanggal_event)) }}</span>
                                        <span class="mos">{{ date('M', strtotime($item->tanggal_event)) }}</span>
                                        <span class="yr">{{ date('Y', strtotime($item->tanggal_event)) }}</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-heading">
                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="tooltip"
                                            title="{{ $item->nama_event }}">{{ $item->nama_event }}
                                        </a>
                                    </div>
                                    <p>{{ Str::limit($item->desc_event, 50, '...') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Data Prestasi --}}
                <div class="col-lg-8 mb-5">
                    <div class="card-pengumuman">
                        <div class="">
                            <h4 class="p-3 fw-semi-bold">Prestasi Mahasiswa Jurusan : </h4>
                        </div>
                        <div class="owl-slide-3 owl-carousel">
                            @foreach ($dataPrestasi as $item)
                                <div class="course-1-item card team_body">
                                    <figure class="thumnail">
                                        @if ($item->foto_prestasi == '')
                                            <img src="{{ asset('images/template/no-image.png') }}" class="p-3">
                                        @else
                                            <img src="{{ asset('images/penghargaan/' . $item->foto_prestasi) }}"
                                                class="p-3">
                                        @endif
                                    </figure>
                                    <p class="p-2">{{ $item->nama_prestasi }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video -->
    <section class="section-sm">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap me-3">Video Dokumentasi Jurusan</h2>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <center>
                <div class="row justify-content-center">
                    <!-- course item -->
                    <div class="col-lg-6 col-sm-6 mb-3">
                        <iframe id="youtube-frame" class="shadow-card youtube-frame" width="560" height="315"
                            src="https://www.youtube.com/embed/4RW2gXLHFyQ?controls=0" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-3">
                        <iframe id="youtube-frame" class="shadow-card youtube-frame" width="560" height="315"
                            src="https://www.youtube.com/embed/zTWgQS2Gn-Y?controls=0" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <!-- course item -->
                </div>
            </center>
            <!-- /course list -->
        </div>
    </section>
    <!-- /Video -->
@endsection

@section('script')
    <script>
        AOS.init();
    </script>

    <script>
        // Get the video
        var video = document.getElementById("myVideo");

        // Get the button
        var btn = document.getElementById("myBtn");
    </script>
@endsection
