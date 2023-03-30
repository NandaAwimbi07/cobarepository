<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-grey-theme navbar-dark fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav top_nav ml-auto pr-4">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                data-toggle="dropdown" aria-expanded="false">
                @if (Auth::user()->picture == '')
                    <span class="text-white">{{ Auth::user()->name }}</span>
                @else
                    <img src="{{ asset(Auth::user()->picture) }}" class="admin_picture" alt="">
                    <span class="text-white">{{ Auth::user()->name }}</span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-user dropdown-menu-right">
                <a href="/" class="dropdown-item">
                    <i class="fa-solid fa-user mr-3"></i> Beranda
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
