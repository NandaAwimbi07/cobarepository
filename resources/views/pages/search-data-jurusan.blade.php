@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Seach Data Jurusan</title>

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
    <div class="site-title spad mb-5">
        <div class="container" data-aos="fade_up">
            <div class="row justify-content-around text-start">
                <div class="col-lg-12">
                    <div class="card-title">
                        <div class="row mt-3">
                            <div class="col-lg">
                                <h3 class="text-center"> <b> <span class="text-theme-yellow">S</span>EARCH
                                        <span class="text-theme-yellow">D</span>ATA <span
                                            class="text-theme-yellow">J</span>URUSAN</b></h3>
                                <center>
                                    <hr class="hr-theme mx-auto">
                                </center>
                            </div>
                        </div>
                        @if ($search == '')
                            <div class="row mt-3 justify-content-center">
                                <div class="col-lg-8">
                                    <center>
                                        <h4 class="mb-3 fw-semi-bold">Mohon masukkan keywoard pencarian yang valid.</h4>
                                        <img class="img-fluid" src="{{ asset('img/ilustrator/search-data-blank.svg') }}"
                                            alt="">
                                        <h4 class="mt-5 fw-semi-bold">Oops kami tidak menemukan data apapun.</h4>
                                    </center>
                                </div>
                            </div>
                        @else
                            @if (!$dosens->isEmpty())
                                {{-- Pencarian Dosen --}}
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-lg-10 mb-4">
                                        <h4>Data Dosen Jurusan : </h4>
                                        <span>Hasil pencarian anda : {{ $search }}</span><br>
                                        <span>Status : </span>
                                        @if ($dosens->isEmpty())
                                            Data tidak ditemukan
                                        @else
                                            Data ditemukan
                                        @endif
                                    </div>
                                    @foreach ($dosens as $dosen)
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
                            @elseif (!$beritas->isEmpty())
                                {{-- Pencarian Event --}}
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-lg-10 mb-4">
                                        <h4>Data Berita Jurusan : </h4>
                                        <span>Hasil pencarian anda : {{ $search }}</span><br>
                                        <span>Status : </span>
                                        @if ($beritas->isEmpty())
                                            Data tidak ditemukan
                                        @else
                                            Data ditemukan
                                        @endif
                                    </div>
                                    @foreach ($beritas as $itemBerita)
                                        <div class="col-lg-3 col-md-6 team_col" data-aos="zoom-out-down">
                                            <div class="team_item">
                                                <div class="team_body">
                                                    @if ($itemBerita->foto_berita == '')
                                                        <img src="{{ asset('images/template/no-image.png') }}"
                                                            class="p-3">
                                                    @else
                                                        <img src="{{ asset('images/berita/' . $itemBerita->foto_berita) }}"
                                                            class="p-3">
                                                    @endif

                                                    <center>
                                                        <hr class="hr-theme mx-auto">
                                                    </center>
                                                    <div class="content-item">
                                                        <a href="#"
                                                            class="">{{ $itemBerita->judul_berita }}</a>
                                                        <div class="mt-2">Tanggal :
                                                            {{ dateConversion($itemBerita->tanggal_berita) }}
                                                        </div>
                                                        <div class="">Kategori Berita :
                                                            @foreach ($data['kategori'] as $itemKategori)
                                                                {{ $itemBerita->kategori_berita == $itemKategori->id ? $itemKategori->nama_kategori : '' }}
                                                            @endforeach
                                                        </div>
                                                        <div class="">Penyelenggara :
                                                            {{ $itemBerita->penyelenggara_berita }}</div>
                                                        <div class="">Status Event : {{ $itemBerita->status_berita }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @elseif (!$prestasis->isEmpty())
                                {{-- Pencarian Prestasi --}}
                                <div class="row mt-3 justify-content-center mb-3">
                                    <div class="col-lg-10 mb-4">
                                        <h4>Data Prestasi Mahasiswa Jurusan : </h4>
                                        <span>Hasil pencarian anda : {{ $search }}</span><br>
                                        <span>Status : </span>
                                        @if ($prestasis->isEmpty())
                                            Data tidak ditemukan
                                        @else
                                            Data ditemukan
                                        @endif
                                    </div>
                                    @foreach ($prestasis as $itemPrestasi)
                                        <div class="col-lg-3 col-md-6 team_col" data-aos="zoom-out-down">
                                            <div class="team_ite shadow-card">
                                                <div class="team_body">
                                                    @if ($itemPrestasi->foto_prestasi == '')
                                                        <img src="{{ asset('images/template/no-image.png') }}"
                                                            class="p-3">
                                                    @else
                                                        <img src="{{ asset('images/penghargaan/' . $itemPrestasi->foto_prestasi) }}"
                                                            class="p-3">
                                                    @endif

                                                    <center>
                                                        <hr class="hr-theme mx-auto">
                                                    </center>
                                                    <div class="content-item">
                                                        <a href="#"
                                                            class="">{{ $itemPrestasi->nama_prestasi }}</a>
                                                        <div class="mt-2">Tanggal :
                                                            {{ dateConversion($itemPrestasi->tahun_prestasi) }}
                                                        </div>
                                                        <div class="">Peraih Prestasi :
                                                            {{ $itemPrestasi->peraih_prestasi }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="row mt-3 justify-content-center mb-3">
                                    <div class="col-lg-10 mb-4">
                                        <h4>Data Dosen, Event dan Prestasi Mahasiswa Jurusan : </h4>
                                        <span>Hasil pencarian anda : {{ $search }}</span><br>
                                        <span>Status : </span>
                                        @if ($dosens->isEmpty() && $events->isEmpty() && $prestasis->isEmpty())
                                            Data tidak ditemukan
                                        @else
                                            Data ditemukan
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
