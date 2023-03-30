@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Tambah Berita</title>
@endsection

@section('heading', 'Menambahkan Data Berita Baru')

@section('page')
    <li class="breadcrumb-item active">Insert Berita</li>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section class="pt-4 bg-section">
        <div class="row justify-content-center">
            <div class="col-md-11">
                {{-- Form action disesuaikan --}}
                <form action="{{ $action }}" class="form-group" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container container-form shadow-card mb-5 fixed">
                        <div class="row ml-4 mr-4 pt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul_berita" class="medium">Judul Berita :</label>
                                    <input type="text" class="form-control form-theme" id="judul_berita"
                                        name="judul_berita" placeholder="Judul Berita">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="medium">Foto Berita <span class="fw-medium">(*max img
                                            2Mb)</span>:</label>
                                    <input type="file" class="form-control form-theme" id="foto_berita" name="file"
                                        placeholder="Foto berita">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penyelenggara_berita" class="medium">Penyelenggara Berita :</label>
                                    <input type="text" class="form-control form-theme" id="penyelenggara_berita"
                                        name="penyelenggara_berita" placeholder="Penyelenggara">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_berita" class="medium">Tanggal Berita :</label>
                                    <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                        class="form-control form-theme datedropper-init" id="tanggal_berita"
                                        name="tanggal_berita" placeholder="Pilih Tanggal">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="kategori_berita" class="medium">Kategori Berita :</label>
                                        <select class="form-control form-theme" id="kategori_berita" name="kategori_berita">
                                            <option value="">Pilih Kategori</option>
                                            {{-- looping from table kategori --}}
                                            @foreach ($kategori as $itemKategori)
                                                <option value="{{ $itemKategori->id }}">
                                                    {{ $itemKategori->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="status_berita" class="medium">Status Berita :</label>
                                        <select class="form-control form-theme" id="status_berita" name="status_berita">
                                            <option value="">Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non Aktif">Non Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desc_berita" class="medium">Deskripsi Berita :</label>
                                    <textarea class="form-control form-color" id="desc_berita" name="desc_berita" placeholder="Rincian berita"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.berita') }}" name="kembali"
                                    class="btn bg-grey-theme px-sm-3 py-sm-2 fw-semi-bold text-white mt-3" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                                <button type="submit"
                                    class="btn bg-yellow-theme px-sm-3 py-sm-2 fw-semi-bold mt-3">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- End Container Form --}}
@endsection

{{-- Running datepicker --}}
@section('script')
    <script>
        dateDropper({
            selector: '#date-input',
            expandedDefault: true,
            expandable: true,
            overlay: true,
            showArrowsOnHover: true,
            autoFill: false
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Berita").addClass("active");
    </script>
@endsection
