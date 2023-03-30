@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Prestasi Mahasiswa</title>

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
                        <h2 class="section_title">PRESTASI MAHASISWA JURUSAN</h2>
                    </div>
                </div>
                {{-- Prestasi Header --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">Prestasi Mahasiswa Jurusan Teknik Informatika</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>
                {{-- Prestasi Content --}}
                <div class="row mb-2 justify-content-center">
                    @foreach ($prestasi as $itemPrestasi)
                        <div class="col-lg-3 col-md-6 team_col" data-aos="zoom-out-down">
                            <div class="team_item">
                                <div class="team_body">
                                    @if ($itemPrestasi->foto_prestasi == '')
                                        <img src="{{ asset('images/template/no-image.png') }}" class="p-3">
                                    @else
                                        <img src="{{ asset('images/penghargaan/' . $itemPrestasi->foto_prestasi) }}"
                                            class="p-3">
                                    @endif

                                    <center>
                                        <hr class="hr-theme mx-auto">
                                    </center>
                                    <div class="content-item">
                                        <a href="#" class="">{{ $itemPrestasi->nama_prestasi }}</a>
                                        <div class="mt-2">Tanggal : {{ dateConversion($itemPrestasi->tahun_prestasi) }}
                                        </div>
                                        <div class="">Peraih Prestasi : {{ $itemPrestasi->peraih_prestasi }}</div>
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
