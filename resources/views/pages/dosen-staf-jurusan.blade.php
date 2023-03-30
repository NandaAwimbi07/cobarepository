@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Dosen dan Staf Jurusan</title>
@endsection

@section('content')
    {{-- Dosen Begin --}}
    <div class="team ftco-section">
        <div class="team_background p-1">
            <div class="container">
                <div class="row mb-4">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">STRUKTUR ORGANISASI JURUSAN<br>(TAHUN 2022 - 2023)</h2>
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
                {{-- Ka --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">KA DIVISI</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($ka as $dosen)
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
                {{-- Dosen --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">DOSEN JURUSAN</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($dosenJurusan as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt="Foto Dosen Jurusan"
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
                {{-- Staf Admin --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">STAF JURUSAN</h3>
                            <span>Administrasi Jurusan</span>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($admin as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt=""Foto Ketua
                                        Jurusan class="p-3" title="{{ $dosen->nama_dosen }}">
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
                {{-- Staf Lab --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">STAF JURUSAN</h3>
                            <span>Pranata Laboratorium Pendidikan</span>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($plp as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt=""Foto Ketua
                                        Jurusan class="p-3" title="{{ $dosen->nama_dosen }}">
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

                    @foreach ($teknisi as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt=""Foto Ketua
                                        Jurusan class="p-3" title="{{ $dosen->nama_dosen }}">
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

                    @foreach ($jaringan as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt=""Foto Ketua
                                        Jurusan class="p-3" title="{{ $dosen->nama_dosen }}">
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
                {{-- Staf Kebersihan --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">STAF JURUSAN</h3>
                            <span>Kebersihan</span>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    @foreach ($kebersihan as $dosen)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="fade-up">
                            <div class="team_item">
                                <div class="team_body">
                                    <img src="{{ asset('images/dosen/' . $dosen->foto_dosen) }}" alt=""Foto Ketua
                                        Jurusan class="p-3" title="{{ $dosen->nama_dosen }}">
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
            </div>
        </div>
    </div>
    {{-- Dosen End --}}
@endsection
