@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Kehidupan Kampus</title>
@endsection

@section('content')
    {{-- Konten Kehidupan Kampus --}}
    <section class="spad">
        <div class="container">
            <div class="card-title   mb-5">
                {{-- Row Header --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="pb-4 mt-3">
                            <h3 class="text-center"><b><span class="text-theme-yellow">K</span>EHIDUPAN <span
                                        class="text-theme-yellow">K</span>AMPUS</b></h3>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                        </div>
                    </div>
                </div>
                {{-- Row Content --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="container mb-4">
                            <div class="text-center mt-20 ">
                                <h4 class="text-center"><b><span class="text-theme-yellow">K</span>egiatan <span
                                            class="text-theme-yellow">M</span>ahasiswa</b></h4>
                                <h4 class="text-center"><b><span class="text-theme-yellow">P</span>oliteknik <span
                                            class="text-theme-yellow">N</span>egeri <span
                                            class="text-theme-yellow">B</span>anyuwangi</b></h4>
                            </div>
                            <center class="mt-5 pt-2 pb-2">
                                <img src="{{ asset('img/keg-mhs/pkkmb_2019.png') }}" alt="">
                            </center>
                            <center class="mt-5 pb-2">
                                <img src="{{ asset('img/keg-mhs/kegiatan_2.png') }}" alt="">
                            </center>
                            <center class="mt-5 pb-2">
                                <img src="{{ asset('img/keg-mhs/kegiatan_3.png') }}" alt="">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
