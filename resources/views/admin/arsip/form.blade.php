@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Tambah Arsip</title>
@endsection

@section('heading', 'Menambahkan Data Baru Arsip')

@section('page')
    <li class="breadcrumb-item active">Insert Arsip</li>
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
                                    <label for="nama_file" class="medium">Nama File :</label>
                                    <input type="text" class="form-control form-theme" id="nama_file" name="nama_file"
                                        placeholder="Nama file" value="{{ isset($arsip) ? $arsip->nama_file : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file" class="medium">File Arsip <span class="fw-medium">(*max file
                                            2Mb)</span>:</label>
                                    <input type="file" class="form-control form-theme" id="kode_file" name="file"
                                        placeholder="File Arsip">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="jenis_file" class="medium">Jenis File :</label>
                                        <select class="form-control form-theme" id="jenis_file" name="jenis_file">
                                            <option value="">Pilih Jenis File</option>
                                            <option value="SK Mahasiswa Aktif"
                                                {{ $arsip->jenis_file == 'SK Mahasiswa Aktif' ? 'selected' : '' }}>SK
                                                Mahasiswa Aktif</option>
                                            <option value="Kalender Akademik"
                                                {{ $arsip->jenis_file == 'Kalender Akademik' ? 'selected' : '' }}>Kalender
                                                Akademik</option>
                                            <option value="Akreditasi Prodi TRPL"
                                                {{ $arsip->jenis_file == 'Akreditasi Prodi TRPL' ? 'selected' : '' }}>
                                                Akreditasi Prodi TRPL</option>
                                            <option value="Akreditasi Prodi TRK"
                                                {{ $arsip->jenis_file == 'Akreditasi Prodi TRK' ? 'selected' : '' }}>
                                                Akreditasi Prodi TRK</option>
                                            <option value="Akreditasi Prodi BD"
                                                {{ $arsip->jenis_file == 'Akrditasi Prodi BD' ? 'selected' : '' }}>
                                                Akreditasi Prodi BD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_upload" class="medium">Tanggal Upload :</label>
                                    <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                        class="form-control form-theme datedropper-init" id="tanggal_upload"
                                        name="tanggal_upload" placeholder="Pilih Tanggal"
                                        value="{{ isset($arsip) ? $arsip->tanggal_upload : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desc_file" class="medium">Deskripsi File :</label>
                                    <textarea class="form-control form-color" id="desc_file" name="desc_file" placeholder="Deskripsi file arsip"
                                        rows="4">{{ isset($arsip) ? $arsip->desc_file : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.arsip') }}" name="kembali"
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

        $("#Arsip").addClass("active");
    </script>
@endsection
