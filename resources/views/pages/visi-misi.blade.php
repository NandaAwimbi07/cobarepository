@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Visi dan Misi</title>
@endsection

@section('content')
    <!--Visi Misi Begin -->
    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-title about__text mb-4">
                        {{-- Row Header --}}
                        <div class="row pt-1">
                            <div class="col-lg">
                                <div class="pb-4">
                                    <h3>
                                        <p class="text-center"> <b> <span class="text-theme-yellow">V</span>ISI & <span
                                                    class="text-theme-yellow">M</span>ISI</b></p>
                                        <p class="text-center"> <b><span class="text-theme-yellow">P</span>OLITEKNIK
                                                <span class="text-theme-yellow">N</span>EGERI <span
                                                    class="text-theme-yellow">B</span>ANYUWANGI</b></p>
                                    </h3>
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                </div>
                            </div>
                        </div>
                        {{-- Row Content --}}
                        <div class="row justify-content-center pb-1">
                            <div class="col-lg-11">
                                {{-- Visi --}}
                                <div class="mt-2">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">V</span>isi</b> <b><span
                                                class="text-theme-yellow">P</span>oliwangi</b></h4>
                                    <b>
                                        <p>Visi Politeknik Negeri Banyuwangi : </p>
                                    </b>
                                    <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Menjadi Lembaga Pendidikan Tinggi vokasional
                                        yang bermutu, berkemampuan ilmu
                                        pengetahuan dan
                                        teknologi, inovatif, dan berdaya saing.</p>
                                </div>
                                {{-- Misi --}}
                                <div class="mt-2">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">M</span>isi</b></b> <b><span
                                                class="text-theme-yellow">P</span>oliwangi</b></h4>
                                    <b>
                                        <p>Misi Politeknik Negeri Banyuwangi :</p>
                                    </b>
                                    <ol>
                                        <li>Menyelenggarakan pendidikan yang bermutu sesuai standar nasional pendidikan
                                            tinggi
                                            untuk menghasilkan lulusan yang kompeten dan profesional</li>
                                        <li>Melaksanakan penelitian terapan dan pengabdian kepada masyarakat dalam rangka
                                            meningkatkan kualitas Sivitas Akademika sesuai dengan permasalahan industri dan
                                            masyarakat.</li>
                                        <li>Meningkatkan akses, relevansi, kemampuan ilmu pengetahuan dan teknologi dan
                                            invoasi
                                            untuk sumber daya manusia yang berkualitas.</li>
                                    </ol>
                                </div>
                                {{-- Tujuan --}}
                                <div class="mt-2">
                                    <h4 class="text-center"><b><span class="text-theme-yellow">T</span>ujuan</b></b>
                                        <b><span class="text-theme-yellow">P</span>oliwangi</b>
                                    </h4>
                                    <b>
                                        <p>Tujuan Politeknik Negeri Banyuwangi :</p>
                                    </b>
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
                                            pemangku kepentingan.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visi Misi End -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
