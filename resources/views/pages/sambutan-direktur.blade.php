@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Sambutan Direktur</title>
@endsection

@section('content')
    <section class="spad">
        <!-- Sambutan_direktur Begin -->
        <section class="team pt-3 pb-5">
            <div class="container">
                <div class="card-title pb-4 mb-4">
                    <div class="row justify-content-around text-center mb-2 mt-3">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="{{ asset('img/dosen-jurusan/shofiul-amin-new.png') }}" class="img-fluid"
                                        alt="Foto Direktur Poliwangi">
                                    <div class="social">
                                        <a href="https://www.facebook.com/shofiul.amin.7" target="_blank"><i
                                                class="fab fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/m._shofiul_amin/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>M. Shofiul Amin S.T, M.T, </h4>
                                    <span>Direktur Politeknik Negeri Banyuwangi</span>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="col-lg-8">
                            <div class="direktur__item__text pb-3" data-aos="fade-up">
                                <h3 class="text-center"> <b> <span class="text-theme-yellow">S</span>AMBUTAN <span
                                            class="text-theme-yellow">D</span>IREKTUR</b></h3>
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                                <p style="text-align: justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Poliwangi
                                    telah menjadi perguruan tinggi
                                    yang
                                    memberikan
                                    lulusan
                                    terbaiknya kepada bangsa dan
                                    negara. Capaian itu kita syukuri dengan mengamati lulusan banyak berkiprah di berbagai
                                    sektor industri dan instansi di tanah air ini. Poliwangi yang bertekad menjadi menjadi
                                    Technopreneurs Politeknik yang berwawasan Global telah menentukan arah untuk mendorong
                                    mahasiswa untuk menjadi Technopreneurs dengan menciptakan berbagai inovasi berdasarkan
                                    mata
                                    kuliah yang ditempuh sehingga bermanfaat bagi masyarakat.
                                    Memiliki wawasan untuk bisa berperan aktif baik secara nasional maupun internasional
                                    dengan
                                    inisiasi menjalin hubungan dengan berbagai perguruan tinggi di luar negeri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sambutan_direktur End -->
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
