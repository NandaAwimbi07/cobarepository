@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Sasaran dan Kebijakan</title>
@endsection

@section('content')
    <!--Visi Misi Begin -->
    <section class="spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-title about__text mb-5">
                        {{-- Row Header --}}
                        <div class="row mt-1">
                            <div class="col-lg">
                                <div class="pb-2">
                                    <h3 class="text-center"> <b> <span class="text-theme-yellow">S</span>ASARAN & <span
                                                class="text-theme-yellow">P</span>ENCAPAIAN</b></h3>
                                    <h3 class="text-center mb-3"> <b><span class="text-theme-yellow">P</span>OLITEKNIK <span
                                                class="text-theme-yellow">N</span>EGERI <span
                                                class="text-theme-yellow">B</span>ANYUWANGI</b></h3>
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="pb-2">
                                    <h3 class="text-center mb-3"> <b> <span class="text-theme-yellow">S</span>asaran <span
                                                class="text-theme-yellow">P</span>encapaian</b></h3>
                                    <ol>
                                        <li>Program Riset Terapan dan Pengabdian melalui Pendanaan PNBP</li>
                                        <li>Program Keilmiahaan Kreativitas Mahasiswa Internal</li>
                                        <li>Program Magang BUMN Bersertifikasi bagi Mahasiswa</li>
                                        <li>Program Pendampingan Kewirausahaan Kampus melalui UPT
                                            Kewirausahaan dan Inkubator Bisnis Teknologi</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="pb-2">
                                    <h3 class="text-center mb-3"> <b> <span class="text-theme-yellow">S</span>trategi <span
                                                class="text-theme-yellow">P</span>encapaian</b></h3>
                                    <ol>
                                        <li>Meningkatkan kualitas pendidikan dan pengajaran.</li>
                                        <li>Meningkatkan kaalitas dan publikasi</li>
                                        <li>Meningkatkan kegiatan pengabdian kepada masyarkat</li>
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
