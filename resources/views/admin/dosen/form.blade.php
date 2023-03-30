@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Update Dosen</title>
@endsection

@section('heading', 'Update Data Baru Dosen')

@section('page')
    <li class="breadcrumb-item active">Update Dosen or Staff</li>
@endsection

@section('content')
    {{-- Start Container Form --}}
    <section class="mt-4 bg-section">
        <div class="row justify-content-center">
            <div class="col-md-11">
                {{-- Form action disesuaikan --}}
                <form action="{{ $action }}" class="form-group" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container container-form shadow-card mb-5">
                        <div class="row ml-4 mr-4 pt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_dosen" class="medium">Nama Dosen :</label>
                                    <input type="text" class="form-control form-theme" id="nama_dosen" name="nama_dosen"
                                        placeholder="Nama dan gelar dosen"
                                        value="{{ isset($dosen) ? $dosen->nama_dosen : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="medium">Foto Dosen <span class="fw-medium">(*max img
                                            2Mb)</span>:</label>
                                    <input type="file" class="form-control form-theme" id="foto_dosen" name="file"
                                        placeholder="Foto Dosen">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nip_nik_dosen" class="medium">NIP atau NIK Dosen :</label>
                                    <input type="text" class="form-control form-theme" id="nip_nik_dosen"
                                        name="nip_nik_dosen" placeholder="NIP atau NIK"
                                        value="{{ isset($dosen) ? $dosen->nip_nik_dosen : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nidn_dosen" class="medium">NIDN Dosen :</label>
                                    <input type="text" class="form-control form-theme" id="nidn_dosen" name="nidn_dosen"
                                        placeholder="NIDN" value="{{ isset($dosen) ? $dosen->nidn_dosen : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="gender_dosen" class="medium">Gender :</label>
                                        <select class="form-control form-theme" id="gender_dosen" name="gender_dosen">
                                            <option value="Default">Pilih Gender</option>

                                            <option value="Laki-laki"
                                                {{ $dosen->gender_dosen == 'Laki-laki' ? 'selected' : '' }}>
                                                Laki-laki</option>
                                            <option value="Perempuan"
                                                {{ $dosen->gender_dosen == 'Perempuan' ? 'selected' : '' }}>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jabatan_dosen" class="medium">Jabatan Dosen :</label>
                                    <input type="text" class="form-control form-theme" id="jabatan_dosen"
                                        name="jabatan_dosen" placeholder="Jabatan"
                                        value="{{ isset($dosen) ? $dosen->jabatan_dosen : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_dosen" class="medium">Email Dosen :</label>
                                    <input type="text" class="form-control form-theme" id="email_dosen"
                                        name="email_dosen" placeholder="Alamat email"
                                        value="{{ isset($dosen) ? $dosen->email_dosen : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="notelp_dosen" class="medium">Nomor Telepon :</label>
                                    <input type="text" class="form-control form-theme" id="notelp_dosen"
                                        name="notelp_dosen" placeholder="Nomor telepon"
                                        value="{{ isset($dosen) ? $dosen->notelp_dosen : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat_dosen" class="medium">Alamat Dosen
                                        :</label>
                                    <textarea class="form-control form-color " id="alamat_dosen" name="alamat_dosen" placeholder="Alamat lengkap"
                                        rows="4">{{ isset($dosen) ? $dosen->alamat_dosen : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-4 mr-4 pb-5">
                            <div class="card-footer justify-content-between">
                                <a href="{{ route('admin.dosen') }}" name="kembali"
                                    class="btn bg-grey-theme px-sm-3 py-sm-2 fw-semi-bold text-white mt-3"
                                    id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp;
                                    Kembali</a> &nbsp;
                                <button type="submit"
                                    class="btn bg-yellow-theme px-sm-3 py-sm-2 fw-semi-bold mt-3">Simpan</button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
    {{-- End Container Form --}}
@endsection

@section('script')
    <script type="text/javascript">
        // $('.alert').alert();
        $("#Dosen").addClass("active");
    </script>
@endsection
