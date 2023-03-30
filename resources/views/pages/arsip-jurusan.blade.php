@extends('layouts.base-layout')

@section('title')
    <title>TI Poliwangi | Arsip Jurusan</title>

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
    {{-- Start Container Menu For Download File --}}
    <section class="mt-5 pt-3 pb-3">
        <div class="container">
            <div class="card-title pb-4 mb-4">
                {{-- Row Header --}}
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="pt-3 pb-1">
                            <h3 class="fw-semi-bold text-center"> <span class="text-theme-yellow">D</span>ownload <span
                                    class="text-theme-yellow">F</span>ile <span class="text-theme-yellow">A</span>rsip
                                <span class="text-theme-yellow">J</span>urusan
                            </h3>
                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-2 mt-3 pt-3 pb-2">
                    <div class="col-lg-5 col-md-6 mb-4 text-justify">
                        <p>
                            &ensp;&ensp;&ensp; Selamat datang di halaman unduh arsip jurusan. Pada halaman ini terdapat
                            berbagai
                            jenis dokumen arsip jurusan, seperti halnya dokumen Akreditasi Prodi, dan SK Mahasiswa Aktif.
                        </p>
                        <p>
                            &ensp;&ensp;&ensp; Kami telah memudahkan Anda untuk mengunduh file dokumen arsip yang Anda
                            butuhkan. Maka dari itu, pastikan sebelum
                            mengunduh koneksi internet Anda bagus dan lancar.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-6 mb-4">
                        <img class="img-thumbnail border-none" src="{{ asset('img/ilustrator/arsip-jurusan.svg') }}"
                            alt="">
                    </div>
                </div>
                <div class="row justify-content-center mb-2">
                    @foreach ($akreditasiTrpl as $item)
                        <div class="col-lg-6 col-md-6 my-auto">
                            <div class="alert bg-grey-theme text-white" role="alert">
                                <h4 class="alert-heading">Dokumen Akreditasi TRPL</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-justify">
                                            Nama File : {{ $item->nama_file }}.<br>
                                            Tanggal : {{ dateConversion($item->tanggal_upload) }}.<br>
                                            Deskripsi : {{ $item->desc_file }}.
                                        </p>
                                    </div>
                                    <div class="col-md-4 my-auto text-center">
                                        <a href="{{ asset('dokumen/arsip/' . $item->kode_file) }}" target="_blank"
                                            class="btn btn-block bg-download py-2 border-radius">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($akreditasiTrk as $item)
                        <div class="col-lg-6 col-md-6 my-auto">
                            <div class="alert bg-grey-theme text-white" role="alert">
                                <h4 class="alert-heading">Dokumen Akreditasi TRK</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-justify">
                                            Nama File : {{ $item->nama_file }}.<br>
                                            Tanggal : {{ dateConversion($item->tanggal_upload) }}.<br>
                                            Deskripsi : {{ $item->desc_file }}.
                                        </p>
                                    </div>
                                    <div class="col-md-4 my-auto text-center">
                                        <a href="{{ asset('dokumen/arsip/' . $item->kode_file) }}" target="_blank"
                                            class="btn btn-block bg-download py-2 border-radius">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($akreditasiBd as $item)
                        <div class="col-lg-6 col-md-6 my-auto">
                            <div class="alert bg-grey-theme text-white" role="alert">
                                <h4 class="alert-heading">Dokumen Akreditasi BD</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-justify">
                                            Nama File : {{ $item->nama_file }}.<br>
                                            Tanggal : {{ dateConversion($item->tanggal_upload) }}.<br>
                                            Deskripsi : {{ $item->desc_file }}.
                                        </p>
                                    </div>
                                    <div class="col-md-4 my-auto text-center">
                                        <a href="{{ asset('dokumen/arsip/' . $item->kode_file) }}" target="_blank"
                                            class="btn btn-block bg-download py-2 border-radius">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($skMahasiswaAktif as $item)
                        <div class="col-lg-6 col-md-6 my-auto">
                            <div class="alert bg-grey-theme text-white" role="alert">
                                <h4 class="alert-heading">Dokumen SK Mahasiswa Aktif</h4>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-justify">
                                            Nama File : {{ $item->nama_file }}.<br>
                                            Tanggal : {{ dateConversion($item->tanggal_upload) }}.<br>
                                            Deskripsi : {{ $item->desc_file }}.
                                        </p>
                                    </div>
                                    <div class="col-md-4 my-auto text-center">
                                        <a href="{{ asset('dokumen/arsip/' . $item->kode_file) }}" target="_blank"
                                            class="btn btn-block bg-download py-2 border-radius">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- End Container --}}
@endsection
