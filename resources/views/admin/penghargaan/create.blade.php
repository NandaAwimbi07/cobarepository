@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Tambah Penghargaan</title>
@endsection

@section('heading', 'Menambahkan Data Baru Penghargaan')

@section('page')
    <li class="breadcrumb-item active">Insert Penghargaan</li>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section class="pt-4 pb-5 bg-section">
        <div class="row justify-content-center">
            <div class="col-md-11">
                {{-- Form action disesuaikan --}}
                <form action="{{ $action }}" class="form-group" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container container-form shadow-card mb-5 fixed">
                        <div class="row ml-4 mr-4 pt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_prestasi" class="medium">Nama Prestasi :</label>
                                    <input type="text" class="form-control form-theme" id="nama_prestasi"
                                        name="nama_prestasi" placeholder="Nama prestasi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="img" class="medium">Foto Prestasi <span class="fw-medium">(*max
                                            img
                                            2Mb)</span>:</label>
                                    <input type="file" class="form-control form-theme" id="foto_prestasi" name="file"
                                        placeholder="Foto Prestasi">

                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="peraih_prestasi" class="medium">Peraih Prestasi :</label>
                                    <input type="text" class="form-control form-theme" id="peraih_prestasi"
                                        name="peraih_prestasi" placeholder="Nama mahasiswa peraih prestasi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun_prestasi" class="medium">Tanggal Perolehan Prestasi :</label>
                                    <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                        class="form-control form-theme datedropper-init" id="tahun_prestasi"
                                        name="tahun_prestasi" placeholder="Pilih Tanggal">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desc_prestasi" class="medium">Deskripsi Prestasi :</label>
                                    <textarea class="form-control form-color" id="desc_prestasi" name="desc_prestasi" placeholder="Deskripsi prestasi"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.penghargaan') }}" name="kembali"
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

        $("#Penghargaan").addClass("active");
    </script>
@endsection
