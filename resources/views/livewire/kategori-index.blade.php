<div>
    @section('title')
        <title>TI Poliwangi | Berita Jurusan</title>

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

    <div>
        {{-- Start dropdown --}}
        <div class="container">
            <div id="kategori" class="container mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="kategori-form" class="fw-medium text-left mb-3">Kategori
                                    Berita Jurusan</label>
                                <select wire:model="byCategories" class="form-control form-theme mb-3 team_body"
                                    id="kategori-form" name="kategori-form">
                                    <option value="">Semua Kategori Berita</option>
                                    @foreach ($data['nama_kategori'] as $itemKategori)
                                        <option value="{{ $itemKategori->id }}">
                                            {{ $itemKategori->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End dropdown --}}

    {{-- Event Content --}}
    <div class="row mb-2 justify-content-center">
        @if ($dataBerita->isEmpty())
            @foreach ($dataBerita as $itemBerita)
                <div class="col-lg-3 col-md-6 team_col" data-aos="zoom-out-down">
                    <div class="team_item">
                        <div class="team_body">
                            @if ($itemBerita->foto_berita == '')
                                <img src="{{ asset('images/template/no-image.png') }}" class="p-3">
                            @else
                                <img src="{{ asset('images/berita/' . $itemBerita->foto_berita) }}" class="p-3">
                            @endif

                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                            <div class="content-item">
                                <a href="#" class="">{{ $itemBerita->judul_berita }}</a>
                                <div class="mt-2">Tanggal : {{ dateConversion($itemBerita->tanggal_berita) }}
                                </div>
                                <div class="">Kategori Berita :
                                    @foreach ($data['kategori'] as $itemKategori)
                                        {{ $itemBerita->kategori_berita == $itemKategori->id ? $itemKategori->nama_kategori : '' }}
                                    @endforeach
                                </div>
                                <div class="">Penyelenggara : {{ $itemBerita->penyelenggara_berita }}</div>
                                <div class="">Status Event : {{ $itemBerita->status_berita }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            @foreach ($berita as $itemBerita)
                <div class="col-lg-3 col-md-6 team_col" data-aos="zoom-out-down">
                    <div class="team_item">
                        <div class="team_body">
                            @if ($itemBerita->foto_berita == '')
                                <img src="{{ asset('images/template/no-image.png') }}" class="p-3">
                            @else
                                <img src="{{ asset('images/berita/' . $itemBerita->foto_berita) }}" class="p-3">
                            @endif

                            <center>
                                <hr class="hr-theme mx-auto">
                            </center>
                            <div class="content-item">
                                <a href="#" class="">{{ $itemBerita->judul_berita }}</a>
                                <div class="mt-2">Tanggal : {{ dateConversion($itemBerita->tanggal_berita) }}
                                </div>
                                <div class="">Kategori Berita :
                                    @foreach ($data['kategori'] as $itemKategori)
                                        {{ $itemBerita->kategori_berita == $itemKategori->id ? $itemKategori->nama_kategori : '' }}
                                    @endforeach
                                </div>
                                <div class="">Penyelenggara : {{ $itemBerita->penyelenggara_berita }}</div>
                                <div class="">Status Event : {{ $itemBerita->status_berita }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
