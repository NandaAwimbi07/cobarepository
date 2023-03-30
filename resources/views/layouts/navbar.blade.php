{{-- Start Navbar --}}
<header class="fixed-top header navbar-screen">
    <div class="top-header py-1 header bg-yellow-theme">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-2 col-sm-12 text-start">
                    <div class="main-info-area">
                        <div class="left-section wrap-logo-top">
                            <a href="{{ url('/') }}" class="link-to-home">
                                <img src="{{ asset('img/logo-jurusan.png') }}" width="200" alt="Logo Jurusan" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-9 top-title justify-content-center align-items-center d-flex text-center">
                    <form class="form-inline my-2 my-lg-0" method="GET" action="{{ url('search-data-jurusan') }}">
                        <input class="form-control mr-sm-2 shadow-card form-responsive" name="search" id="search"
                            type="text" size="70" placeholder="Cari dosen, berita atau prestasi mahasiswa"
                            aria-label="Search">
                    </form>
                </div>
                <div class="col-lg-2 col-sm-3 d-flex justify-content-center text-sm-center text-lg-end">
                    @if (auth()->user() != null)
                        <a href="{{ route('login') }}" class="btn-login-theme my-auto px-4 py-2 shadow-card">
                            <i class="fa-solid fa-user">
                            </i> Admin
                        </a>
                    @else
                        <a href="{{ route('login') }}" id="login"
                            class="btn-login-theme my-auto px-4 py-2 shadow-card">
                            <i class="fa-solid fa-user">
                            </i> Login
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Start Navigation Menu -->
    <div class="navigation w-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-grey-theme">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item  dropdown" id="profile">
                            <a class="nav-link  dropdown-toggle" href="#" id="menu_sejarah" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Tentang Poliwangi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('sambutan_direktur') }}">Sambutan
                                        Direktur</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('sejarah') }}" id="sejarah">Sejarah
                                        Singkat</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('visi_misi') }}">Visi dan Misi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('sasaran_kebijakan') }}">Sasaran dan
                                        Kebijakan
                                        Mutu
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('sistem_pendidikan') }}">Sistem
                                        Pendidikan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Tentang Jurusan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('pimpinan') }}">Pimpinan Jurusan</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('dosen') }}">Dosen dan Staf Jurusan</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('arsip_jurusan') }}">Arsip Jurusan</a></li>
                                {{-- Menu event disable --}}
                                {{-- <li><a class="dropdown-item" href="{{ route('event_jurusan') }}">Event Jurusan</a></li> --}}
                                <li><a class="dropdown-item" href="{{ route('berita_jurusan') }}">Berita Jurusan</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('kerjasama_jurusan') }}">Kerjasama
                                        Jurusan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Akademik
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item_sub dropdown-submenu">
                                    <a class="dropdown-item" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Program Studi <i
                                            class="fas fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-submenu1" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('jurusan_trpl') }}">TRPL</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('jurusan_trk') }}">TRK</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('jurusan_bd') }}">BD</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('kalender_akademik') }}">Kalender
                                        Akademik</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('peraturan_akademik') }}">Peraturan
                                        Akademik</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Mahasiswa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('kehidupan_kampus') }}">Kehidupan
                                        Kampus</a></li>
                                <li><a class="dropdown-item" href="{{ route('prestasi_mahasiswa') }}">Prestasi
                                        Mahasiswa</a></li>
                            </ul>
                        </li>

                        <li class="nav-item" id="fasilitas">
                            <a class="nav-link" href="{{ route('fasilitas') }}">FASILITAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kontak" href="{{ route('kontak') }}">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- End Navigation Menu --}}
</header>
{{-- End Navbar --}}
