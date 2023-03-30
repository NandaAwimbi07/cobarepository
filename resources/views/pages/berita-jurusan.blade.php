@extends('layouts.base-layout')

@section('content')
    <div class="team ftco-section">
        <div class="team_background p-1">
            <div class="container">
                <div class="row mb-4">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">BERITA JURUSAN</h2>
                    </div>
                </div>
                {{-- Event Header --}}
                <div class="row mb-4">
                    <div class="col-md">
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="section_title_container text-center">
                            <h3 class="">Berita Jurusan Teknik Informatika</h3>
                        </div>
                    </div>
                    <div class="col-md">
                        <hr>
                    </div>
                </div>

                {{-- Livewire Code --}}
                @livewireStyles

                <livewire:kategori-index></livewire:kategori-index>

                @livewireScripts
                {{-- Livewire End Code --}}
            </div>
        </div>
    </div>
@endsection
