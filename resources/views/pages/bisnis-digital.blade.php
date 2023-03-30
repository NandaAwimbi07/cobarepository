@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Jurusan BD</title>
@endsection

@section('content')
    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="pb-4">
                            <h3 style="text-align: center"> <b> <span class="text-theme-yellow">K</span>APRODI</b></h3>
                            <h3 style="text-align: center"> <b> <span class="text-theme-yellow">B</span>ISNIS <span
                                        class="text-theme-yellow">D</span>IGITAL</b></h3>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                            <div class="row justify-content-center mt-5">
                                @foreach ($kaprodiBd as $dosen)
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
                                    <p style="text-align: justify">
                                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Program Studi Bisnis Digital adalah prodi yang
                                        mempelajari tentang cara merancang
                                        bisnis
                                        yang dikembangkan menggunakan teknologi digital. Ilmu yang akan diperoleh merupakan
                                        perpaduan dari ilmu bisnis, manajemen, sistem informasi, hingga teknik informatika.
                                        Gelar
                                        sarjana yang diperoleh lulusannya pun bukan Sarjana Ekonomi maupun Sarjana
                                        Manajemen,
                                        melainkan Sarjana Bisnis Digital (S.BD).
                                    </p>
                                    <p style="text-align: justify">
                                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Program Studi Bisnis Digital sendiri mencakup
                                        banyak bidang, sehingga mata kuliah
                                        yang
                                        dipelajari pun sangat beragam. Mahasiswa akan mendapatkan ilmu menarik yang
                                        berkaitan dengan
                                        start-up digital, big data, hingga artificial intelligence (AI). Makanya, dosen yang
                                        akan
                                        mengajar di prodi ini pun berasal dari berbagai bidang, mulai dari ekonomi, Teknik
                                        Informatika, komunikasi, hingga hukum.
                                    </p>
                                    <p style="text-align: justify">
                                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Selama masa perkuliahan, tentunya kamu akan
                                        banyak mempelajari tentang ilmu tentang
                                        e-commerce, user experience, social media management, hingga programming. Di jurusan
                                        bisnis
                                        yang satu ini, mahasiswa juga akan mempelajari dasar-dasar programming hingga web &
                                        mobile
                                        technology. Karena jika kamu bergelut di bidang bisnis digital namun tidak memahami
                                        aspek-aspek yang ada di dalamnya, maka hal ini dapat menghambat berjalannya bisnis.
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
                                <h4 style="text-align: center"> <b> <span class="text-theme-yellow">B</span>isnis
                                        <span class="text-theme-yellow">D</span>igital</b></h4>
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
                                                class="text-theme-yellow">B</span>D</b></h4>
                                    <p>Visi Bisnis Digital :</p>

                                    <p style="text-align: justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Visi Program Studi
                                        Sarjana Terapan Bisnis Digital adalah “Menjadi Program Studi Vokasi yang kompeten
                                        dan adaptif di bidang bisnis digital nasional di tahun 2027”</p>
                                </div>
                                <div class="pb-4">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">M</span>isi <span
                                                class="text-theme-yellow">B</span>D</b></h4>
                                    <p>Misi Bisnis Digital :</p>

                                    <ol>
                                        <li style="text-align: justify">Menyelenggarakan pendidikan dan pengajaran secara
                                            profesional sesuai dengan perkembangan IPTEKS dalam pemenuhan ahli di bidang
                                            bisnis digital;</li>
                                        <li style="text-align: justify">Melaksanakan dan mengembangkan penelitian dan
                                            pengabdian kepada masyarakat yang mendukung proses pembelajaran berbasis IPTEKS
                                            yang sesuai dengan bidang bisnis digital;</li>
                                        <li style="text-align: justify">Membangun jejaring kerjasama dengan stakeholder yang
                                            berkaitan dengan bidang bisnis digital di tingkat regional, nasional dan
                                            internasional;</li>
                                        <li style="text-align: justify">Melaksanakan pembinaan dan pengembangan
                                            kemahasiswaan berfokus pada jiwa technopreneurship yang mandiri dan kreatif;
                                        </li>
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
