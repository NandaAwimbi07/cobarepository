@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Jurusan TRPL</title>
@endsection

@section('content')
    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="pb-1">
                            <h3 style="text-align: center"> <b> <span class="text-theme-yellow">K</span>APRODI</b></h3>
                            <h3 style="text-align: center"> <b> <span class="text-theme-yellow">T</span>EKNIK <span
                                        class="text-theme-yellow">R</span>EKAYASA <span
                                        class="text-theme-yellow">P</span>ERANGKAT <span
                                        class="text-theme-yellow">L</span>UNAK </b></h3>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                            <div class="row justify-content-center mt-5">
                                @foreach ($kaprodiTrpl as $dosen)
                                    <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                                        <div class="team_item shadow-card">
                                            <div class="team_body">
                                                <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}"
                                                    alt="Foto Ketua Jurusan" class="p-3"
                                                    title="{{ $dosen->nama_dosen }}">
                                                <center>
                                                    <hr class="hr-theme mx-auto">
                                                </center>
                                                <div class="content-item">
                                                    <a href="#" class="">{{ $dosen->nama_dosen }}</a>
                                                    <div class="mt-2">NIDN :
                                                        {{ !isset($dosen->nidn_dosen) ? 'Kosong' : $dosen->nidn_dosen }}
                                                    </div>
                                                    <div class="">Jabatan : {{ $dosen->jabatan_dosen }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- Row Header --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="pb-4">
                                    <h4 class="text-center"><b> <span class="text-theme-yellow">D</span>eskripsi <span
                                                class="text-theme-yellow">P</span>rogram <span
                                                class="text-theme-yellow">S</span>tudi</b></h4>
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                </div>
                            </div>
                        </div>
                        {{-- Row Content --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="pb-4">
                                    <p style="text-align: justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Program Studi
                                        Rekayasa Perangkat Lunak merupakan jurusan
                                        yang
                                        didalamnya mempelajari prinsip sekaligus teknik mendesain perangkat lunak yang mudah
                                        digunakan dan tepat guna. Program Studi yang juga disebut Software Engineering ini
                                        bisa
                                        menjadi
                                        wadah yang tepat bagi kamu yang ingin mempelajari desain program dan mengembangkan
                                        sebuah
                                        software ataupun sistem operasi.
                                    </p>
                                    <p style="text-align: justify">
                                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Melalui program studi ini, kamu akan diajari
                                        bagaimana cara mendesain dan melakukan
                                        analisis
                                        algoritma,
                                        guna membuat program aplikasi berbasis mobile atau web. Selain itu, kamu juga akan
                                        belajar
                                        mengenai
                                        pengembangan sebuah sistem operasi dengan menggunakan struktur data yang efisien.
                                    </p>
                                    <p style="text-align: justify">
                                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Pada dasarnya, Jurusan Rekayasa Perangkat Lunak
                                        disiapkan untuk menyokong kebutuhan
                                        profesional
                                        dalam bidang teknologi. Tentu saja hal ini menjadi berita baik bagi kamu yang suka
                                        terhadap
                                        hal-hal berbau teknologi, apalagi bagi kamu yang memang bercita-cita menjadi ahli
                                        pada
                                        bidang tersebut.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- Row Header --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="pb-4">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">V</span>isi & <span
                                                class="text-theme-yellow">M</span>isi <span
                                                class="text-theme-yellow">P</span>rodi</b></h4>
                                    <h4 style="text-align: center"> <b> <span class="text-theme-yellow">T</span>eknik <span
                                                class="text-theme-yellow">R</span>ekayasa <span
                                                class="text-theme-yellow">P</span>erangkat <span
                                                class="text-theme-yellow">L</span>unak </b></h4>
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                </div>
                            </div>
                        </div>
                        {{-- Row Content --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="pb-4">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">V</span>isi <span
                                                class="text-theme-yellow">T</span>RPL</b></h4>
                                    <p>Visi Teknik Rekayasa Perangkat Lunak :</p>

                                    <p style="text-align: justify">
                                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Menjadi program studi yang berkualitas dan
                                        profesional di bidang Teknologi Rekayasa Perangkat Lunak untuk menunjang kebutuhan
                                        pasar global pada tahun 2027. d. Misi Program Studi
                                    </p>
                                </div>
                                <div class="pb-4">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">M</span>isi <span
                                                class="text-theme-yellow">T</span>RPL</b></h4>
                                    <p>Misi Teknik Rekayasa Perangkat Lunak :</p>

                                    <ol>
                                        <li style="text-align: justify">Menyelenggarakan pendidikan dalam bidang rekayasa
                                            perangkat lunak untuk menghasilkan lulusan terampil, kompetitif, berjiwa
                                            pancasila, berkualifikasi nasional Indonesia, serta mampu mengembangkan diri ke
                                            jenjang yang lebih tinggi;</li>
                                        <li style="text-align: justify">Melaksanakan penelitian dengan bersinergi dengan
                                            bidang ilmu lain dan industri untuk menghasilkan produk-produk inovatif di
                                            bidang teknologi rekayasa perangkat lunak;</li>
                                        <li style="text-align: justify">Mengembangkan kerjasama dengan berbagai pihak, baik
                                            dari dalam maupun luar negeri dalam bidang pendidikan, penelitian terapan, dan
                                            pengabdian kepada masyarakat di bidang rekayasa perangkat lunak;</li>
                                        <li style="text-align: justify">Menjadi program studi di bidang rekayasa perangkat
                                            lunak yang dikenal dan menjadi rujukan masyarakat;</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
