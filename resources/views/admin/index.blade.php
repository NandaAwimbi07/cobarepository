@extends('layout_admin.template')

@section('title')
    <title>TI Poliwangi | Beranda Admin</title>
@endsection

@section('heading')
    Beranda Admin
@endsection

@section('page')
    <li class="breadcrumb-item active">Beranda</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content bg-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert bg-grey-theme alert-dismissible fade show shadow-card text-light" role="alert">
                        <span class="badge badge-pill badge-success py-1">Success</span> &ensp; Selamat datang kembali
                        <b>{{ Auth::user()->name }}</b>, kamu berhasil masuk ke panel Admin.
                        <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                {{-- <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>{{ $user }}</h3>
                            <p>Manajemen Users</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-user"></i>
                        </div>
                        <a href="" class="small-box-footer">Lihat Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $dosen }}<sup style="font-size: 20px"></sup></h3>

                            <p>Manajemen<br>Dosen dan Staf</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-graduation-cap text-white"></i>
                        </div>
                        <a href="{{ route('admin.dosen') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                {{-- Menu event --}}
                {{-- <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $event }}<sup style="font-size: 20px"></sup></h3>
                            <p>Manajemen<br>Event</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-calendar-check text-white"></i>
                        </div>
                        <a href="{{ route('admin.event') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $berita }}<sup style="font-size: 20px"></sup></h3>
                            <p>Manajemen<br>Berita</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-newspaper text-white"></i>
                        </div>
                        <a href="{{ route('admin.berita') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{ $kategori }}<sup style="font-size: 20px"></sup></h3>
                            <p>Manajemen<br>Kategori Berita</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-tags text-white"></i>
                        </div>
                        <a href="{{ route('admin.kategori') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>{{ $arsip }}</h3>

                            <p>Manajemen<br>Arsip</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-folder-open text-white"></i>
                        </div>
                        <a href="{{ route('admin.arsip') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $kerjasama }}<sup style="font-size: 20px"></sup></h3>
                            <p>Manajemen<br>Kerjasama</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-handshake text-white"></i>
                        </div>
                        <a href="{{ route('admin.kerjasama') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 class="text-white">{{ $prestasi }}</h3>

                            <p class="text-white">Manajemen<br>Penghargaan</p>
                        </div>
                        <div class="icon">
                            <i class="icon-crud-logo fa-solid fa-trophy text-white"></i>
                        </div>
                        <a href="{{ route('admin.penghargaan') }}" class="small-box-footer"><span class="text-white">More
                                info</span> <i class="fas fa-arrow-circle-right text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="p-5 mb-4 bg-section">

    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script type="text/javascript">
        // $('.alert').alert();
        $("#Dashboard").addClass("active");
    </script>
@endsection
