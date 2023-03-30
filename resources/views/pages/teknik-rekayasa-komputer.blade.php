@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Jurusan TRK</title>
@endsection

@section('content')
    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="pb-4">
                            <h3 style="text-align: center"> <b> <span class="text-theme-yellow">K</span>APRODI</b></h3>
                            <h3 style="text-align: center"> <b> <span class="text-theme-yellow">T</span>EKNIK <span
                                        class="text-theme-yellow">R</span>EKAYASA <span
                                        class="text-theme-yellow">K</span>OMPUTER</b></h3>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                            <div class="row mb-2 justify-content-center mt-5">
                                @foreach ($kaprodiTrk as $dosen)
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
                                        <p style="text-align: justify">
                                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Program Studi Teknologi Rekayasa Komputer
                                            menyelenggarakan
                                            pendidikan vokasi yang akan menghasilkan lulusan dengan kompetensi utama sebagai
                                            network
                                            administrator, senior programmer, dan IoT Developer yang mampu bersaing di
                                            tingkat
                                            nasional.
                                            Kurikulum prodi ini disusun berdasarkan Standar Kompetensi Kerja Nasional
                                            Indonesia
                                            (SKKNI) dan Accreditation Board for Engineering and Technology (ABET) bidang
                                            technology
                                            of computer engineering.
                                        </p>
                                        <p style="text-align: justify">
                                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Sehingga, lulusan program studi TRK
                                            diharapkan dapat bekerja sebagai salah satu
                                            dari
                                            profesi berikut ini: Network Administrator, Network Designer, Network
                                            Administrator
                                            Madya, Teknisi Madya Jaringan Komputer,, Lead Programmer, Program Analyst,
                                            Object
                                            Programmer, Database Programmer, Web Developer, Software Engineer, Lead
                                            Application
                                            Programmer, Digital Computer Technnology Advisor, Network Control Analyst,
                                            Network
                                            Security Analyst, LAN Application Support Analyst, Teknisi Komputer Spesialis
                                            Senior,
                                            Pengembang Cloud Computing, Web Master, Web Analyst, Online Processing
                                            Transcation
                                            Analyst, Web Administrator, Internet/Intranet Administrator.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- Row Header --}}
                            <div class="row justify-content-center">
                                <div class="col-lg-11">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">V</span>isi & <span
                                                class="text-theme-yellow">M</span>isi <span
                                                class="text-theme-yellow">P</span>rodi</b></h4>
                                    <h4 style="text-align: center"> <b> <span class="text-theme-yellow">T</span>eknik
                                            <span class="text-theme-yellow">R</span>ekayasa <span
                                                class="text-theme-yellow">K</span>omputer</b></h4>
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                </div>
                            </div>
                            {{-- Row Content --}}
                            <div class="row justify-content-center">
                                <div class="col-lg-11">
                                    <div class="pb-4 mt-4">
                                        <h4 class="text-center"><b><span class="text-theme-yellow">V</span>isi <span
                                                    class="text-theme-yellow">T</span>RK</b></h4>
                                        <p>Visi Teknik Rekayasa Komputer :</p>
                                    </div>
                                    <div class="pb-4">
                                        <h4 class="text-center"><b><span class="text-theme-yellow">M</span>isi <span
                                                    class="text-theme-yellow">T</span>RK</b></h4>
                                        <p>Misi Teknik Rekayasa Komputer :</p>
                                        <ol>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="pb-4">
                        <h4 class="text-center"><b>TUJUAN</b></h4>
                        <ol>
                            <li>Mencerdaskan kehidupan masyarakat sekitar melalui kegiatan
                                pendidikan dan menghasilkan lulusan berkualitas dan berdaya saing;</li>
                            <li>Melaksanakan penelitian terapan dalam rangka meningkatkan kualitas
                                Sivitas Akademika sesuai kebutuhan industri dan masyarakat;
                            </li>
                            <li>Melaksanakan kegiatan pengabdian kepada masyarakat dalam
                                bidang ilmu pengetahuan dan teknologi.</li>
                            </li>
                            <li>Membangun jiwa kewirausahaan di kalangan Sivitas Akademika
                                yang dapat menumbuhkembangkan sektor industri kecil, menengah,
                                dan atas.</li>
                            <li>Memperluas kesempatan belajar bagi masyarakat berazaskan
                                pemerataan dan keadilan.</li>
                            <li>mewujudkan keberlanjutan institusi dengan mengembangkan
                                program-program kemitraan dengan masyarakat, pemerintah dan
                                pemangku kepentingan; dan</li>
                        </ol>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
