@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Tambah Kerjasama</title>
@endsection

@section('heading', 'Menambahkan Data Baru Kerjasama')

@section('page')
    <li class="breadcrumb-item active">Insert Kerjasama</li>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section class="mt-2 pb-5 bg-section">
        <div class="row justify-content-center pb-5 pt-5">
            <div class="col-md-11">
                {{-- Form action disesuaikan --}}
                <form action="{{ $action }}" class="form-group" method="POST">
                    @csrf
                    <div class="container container-form shadow-card mb-5 fixed">
                        <div class="row ml-4 mr-4 pt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_program" class="medium">Nama Program :</label>
                                    <input type="text" class="form-control form-theme" id="nama_program"
                                        name="nama_program" placeholder="Nama program">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_mitra" class="medium">Nama Mitra Industri :</label>
                                    <input type="text" class="form-control form-theme" id="nama_mitra" name="nama_mitra"
                                        placeholder="Nama mitra industri">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun_kerjasama" class="medium">Tanggal Kerjasama :</label>
                                    <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                        class="form-control form-theme datedropper-init" id="tahun_kerjasama"
                                        name="tahun_kerjasama" placeholder="Pilih Tanggal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desc_kerjasama" class="medium">Deskripsi Kerjasama :</label>
                                    <textarea class="form-control form-color" id="desc_kerjasama" name="desc_kerjasama" placeholder="Deskripsi prestasi"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.kerjasama') }}" name="kembali"
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

        $("#Kerjasama").addClass("active");
    </script>
@endsection
