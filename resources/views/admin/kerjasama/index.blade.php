@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Manajemen Kerjasama</title>
@endsection

@section('heading')
    Manajemen Data Kerjasama
@endsection

@section('page')
    <li class="breadcrumb-item active">Manajemen Kerjasama</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content bg-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert bg-grey-theme alert-dismissible fade show shadow-card text-light" role="alert">
                        <span class="badge badge-pill badge-success py-1">Welcome</span> &ensp; Selamat datang di panel
                        <b>Manajemen Data Kerjsama</b>.
                        <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('admin.create.kerjasama') }}" type="button"
                                    class="btn bg-yellow-theme btn-sm py-2 px-3 fw-semi-bold">
                                    <i class="fa-solid fa-plus"></i> &nbsp; Tambah Data Kerjasama
                                </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="bg-grey-theme text-light">
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="">Nama Program</th>
                                        <th width="">Nama Mitra</th>
                                        <th width="15%">Tahun</th>
                                        <th width="">Deskripsi</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($kerjasama as $itemKerjasama)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $itemKerjasama->nama_program }}</td>
                                            <td>{{ $itemKerjasama->nama_mitra }}</td>
                                            <td>{{ $itemKerjasama->tahun_kerjasama }}</td>
                                            <td>{{ $itemKerjasama->desc_kerjasama }}</td>
                                            <td>
                                                <center>
                                                    <a href="{{ route('admin.edit.kerjasama', $itemKerjasama->id) }}">
                                                        <button class="btn btn-success btn-sm">
                                                            <i class="nav-icon fas fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('admin.delete.kerjasama', $itemKerjasama->id) }}"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="nav-icon fas fa-trash-alt" aria-hidden="true"></i>
                                                        </button>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                        @php
                                            $no++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Kerjasama").addClass("active");
    </script>
@endsection
