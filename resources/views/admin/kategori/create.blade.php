@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Tambah Kategori</title>
@endsection

@section('heading', 'Menambahkan Data Kategori Baru')

@section('page')
    <li class="breadcrumb-item active">Insert Kategori</li>
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
                                    <label for="nama_kategori" class="medium">Nama Kategori :</label>
                                    <input type="text" class="form-control form-theme" id="nama_kategori"
                                        name="nama_kategori" placeholder="Nama kategori">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="author_kategori" class="medium">Author Kategori :</label>
                                    <input type="text" class="form-control form-theme" id="author_kategori"
                                        name="author_kategori" placeholder="Nama Author">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="status_kategori" class="medium">Status Kategori :</label>
                                        <select class="form-control form-theme" id="status_kategori" name="status_kategori">
                                            <option value="">Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non Aktif">Non Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desc_kategori" class="medium">Deskripsi Kategori :</label>
                                    <textarea class="form-control form-color" id="desc_kategori" name="desc_kategori"
                                        placeholder="Penjelasan singkat tentang kategori" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.kategori') }}" name="kembali"
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

        $("#Kategori").addClass("active");
    </script>
@endsection
