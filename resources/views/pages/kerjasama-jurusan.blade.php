@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Kerjasama Jurusan</title>

    @php
    // fungsi konversi data tipe date ke tanggal
    function dateConversion($date)
    {
        $month = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $slug = explode('-', $date);
        return $slug[2] . ' ' . $month[(int) $slug[1]] . ' ' . $slug[0];
    }
    @endphp
@endsection

@section('content')
    <div class="team ftco-section">
        <div class="team_background p-1">
            <div class="container">
                <div class="row mb-4">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">KERJASAMA JURUSAN</h2>
                    </div>
                </div>
                {{-- Kerjasama Header --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">Kerjasama Jurusan Teknik Informatika</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                {{-- Kerjasama Content --}}
                <div class="row mb-2 justify-content-center">
                    @foreach ($kerjasama as $itemKerjasama)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="zoom-out-down">
                            <div class="team_item">
                                <div class="team_body">
                                    <img class="p-3" src="{{ asset('images/template/img-poliwangi.png') }}"
                                        title="{{ $itemKerjasama->nama_program }}">
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                    <div class="content-item">
                                        <a href="#" class="">{{ $itemKerjasama->nama_mitra }}</a>
                                        <div class="mt-2">Tanggal : {{ dateConversion($itemKerjasama->tahun_kerjasama) }}
                                        </div>
                                        <div class="">Deskripsi : {{ $itemKerjasama->desc_kerjasama }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
