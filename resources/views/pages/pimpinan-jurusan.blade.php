@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Pimpinan Jurusan</title>
@endsection

@section('content')
    {{-- Pimpinan Jurusan Begin --}}
    <div class="team ftco-section">
        <div class="team_background p-1">
            <div class="container">
                <div class="row mb-4">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">PIMPINAN JURUSAN<br>(TAHUN 2022 - 2023)</h2>
                    </div>
                </div>
                {{-- Pimpinan --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">PIMPINAN JURUSAN</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($kajur as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt="Foto Ketua Jurusan"
                                        class="p-3" title="{{ $dosen->nama_dosen }}">
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                    <div class="content-item">
                                        <a href="#" class="">{{ $dosen->nama_dosen }}</a>
                                        <div class="mt-2">NIDN :
                                            {{ !isset($dosen->nidn_dosen) ? 'Kosong' : $dosen->nidn_dosen }}</div>
                                        <div class="">Jabatan : {{ $dosen->jabatan_dosen }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Kaprodi --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">KAPRODI JURUSAN</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($kaprodi as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt="Foto Kaprodi"
                                        class="p-3" title="{{ $dosen->nama_dosen }}">
                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                    <div class="content-item">
                                        <a href="#" class="">{{ $dosen->nama_dosen }}</a>
                                        <div class="mt-2">NIDN :
                                            {{ !isset($dosen->nidn_dosen) ? 'Kosong' : $dosen->nidn_dosen }} </div>
                                        <div class="">Jabatan : {{ $dosen->jabatan_dosen }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Pimpinan Jurusan End --}}
@endsection

{{-- <div class="col-lg-3 col-md-6 team_col">
    <div class="team_item">
        <div class="team_body">
            <img src="{{ asset('img/dosen-jurusan/Dedy.jpg') }}" alt="" class="p-3">
            <center>
                <hr class="hr-theme mx-auto">
            </center>
            <div class="content-item">
                <a href="#" class="">Dedy Hidayat Kusuma, S.T., M.Cs.</a>
                <div class="mt-2">NIDN : 004047712</div>
                <div class="">Jabatan : Dosen</div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 team_col">
    <div class="team_item">
        <div class="team_body">
            <img src="{{ asset('img/dosen-jurusan/vivien.jpg') }}" alt="" class="p-3">
            <center>
                <hr class="hr-theme mx-auto">
            </center>
            <div class="content-item">
                <a href="#" class="">Vivien Arief Wardhany, S.T., M.T.</a>
                <div class="mt-2">NIDN : 003048406 </div>
                <div class="">Jabatan : Dosen</div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 team_col">
    <div class="team_item">
        <div class="team_body">
            <img src="{{ asset('img/dosen-jurusan/alif.jpg') }}" alt="" class="p-3">
            <center>
                <hr class="hr-theme mx-auto">
            </center>
            <div class="content-item">
                <a href="#" class="">Alif Akbar Fitrawan, S.Pd., M.Kom.</a>
                <div class="mt-2">NIDN : 0020049102 </div>
                <div class="">Jabatan : Dosen</div>
            </div>
        </div>
    </div>
</div> --}}
