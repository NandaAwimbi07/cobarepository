@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Update Event</title>
@endsection

@section('heading', 'Update Data Baru Event')

@section('page')
    <li class="breadcrumb-item active">Update Event</li>
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
                                    <label for="nama_event" class="medium">Nama Event :</label>
                                    <input type="text" class="form-control form-theme" id="nama_event" name="nama_event"
                                        placeholder="Nama event" value="{{ isset($event) ? $event->nama_event : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="medium">Foto Event <span class="fw-medium">(*max img
                                            2Mb)</span>:</label>
                                    <input type="file" class="form-control form-theme" id="foto_event" name="file"
                                        placeholder="Foto event">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penyelenggara_event" class="medium">Penyelenggara Event :</label>
                                    <input type="text" class="form-control form-theme" id="penyelenggara_event"
                                        name="penyelenggara_event" placeholder="Penyelenggara"
                                        value="{{ isset($event) ? $event->penyelenggara_event : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_event" class="medium">Tanggal Event :</label>
                                    <input id="date-input" type="date" data-dd-opt-custom-class="dd-theme-bootstrap"
                                        class="form-control form-theme datedropper-init" id="tanggal_event"
                                        name="tanggal_event" placeholder="Pilih Tanggal"
                                        value="{{ isset($event) ? $event->tanggal_event : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="status_event" class="medium">Status Event :</label>
                                        <select class="form-control form-theme" id="status_event" name="status_event">
                                            <option value="Default">Pilih Status</option>
                                            <option value="Aktif" {{ $event->status_event == 'Aktif' ? 'selected' : '' }}>
                                                Aktif</option>
                                            <option value="Selesai"
                                                {{ $event->status_event == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                            <option value="On Going"
                                                {{ $event->status_event == 'On Going' ? 'selected' : '' }}>On Going</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="desc_event" class="medium">Deskripsi Event :</label>
                                    <textarea class="form-control form-color" id="desc_event" name="desc_event" placeholder="Deskripsi event"
                                        rows="4">{{ isset($event) ? $event->desc_event : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.event') }}" name="kembali"
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

        $("#Event").addClass("active");
    </script>
@endsection
