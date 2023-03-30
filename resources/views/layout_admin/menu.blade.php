        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-grey-theme">
            <!-- Brand Logo -->
            <a href="{{ route('admin') }}" class="brand-link mb-2">
                <img src="{{ asset('img/logo-base.png') }}" alt="Logo Admin Jurusan"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> Menu Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fa-solid fa-house"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/index/dosen" class="nav-link" id="Dosen">
                                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                                <p> Data Dosen</p>
                            </a>
                        </li>
                        {{-- Event Menu Panel --}}
                        {{-- <li class="nav-item">
                            <a href="{{ route('admin.event') }}" class="nav-link" id="Event">
                                <i class="nav-icon fa-solid fa-calendar-days"></i>
                                <p> Data Event</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.berita') }}" class="nav-link" id="Berita">
                                <i class="nav-icon fa-solid fa-newspaper"></i>
                                <p> Data Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kategori') }}" class="nav-link" id="Kategori">
                                <i class="nav-icon fa-solid fa-tags"></i>
                                <p> Data Kategori Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.arsip') }}" class="nav-link" id="Arsip">
                                <i class="nav-icon fa-solid fa-folder-open"></i>
                                <p> Data Arsip</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.kerjasama') }}" class="nav-link" id="Kerjasama">
                                <i class="nav-icon fa-solid fa-handshake"></i>
                                <p> Data Kerjasama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.penghargaan') }}" class="nav-link" id="Penghargaan">
                                <i class="nav-icon fa-solid fa-trophy"></i>
                                <p> Data Penghargaan</p>
                            </a>
                        </li>

                        {{-- @can('banner_access')
                            <li class="nav-item">
                                <a href="{{ route('banner.index') }}" class="nav-link" id="banner">
                                    <i class="nav-icon far fa-image"></i>
                                    <p> Dosen </p>
                                </a>
                            </li>
                        @endcan
                        @can('event_access')
                            <li class="nav-item">
                                <a href="{{ route('event.index') }}" class="nav-link" id="event">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Event
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('motivasi_access')
                            <li class="nav-item">
                                <a href="{{ route('motivasi.index') }}"
                                    class="nav-link {{ request()->is('admin/motivasi') || request()->is('admin/motivasi/*') ? 'active' : '' }} ">
                                    <i class="nav-icon fas fa-quote-left"></i>
                                    <p> Motivasi </p>
                                </a>
                            </li>
                        @endcan --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
