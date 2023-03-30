<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shrotcut icon" href="{{ asset('img/logo-base.png') }}">

    {{-- Custom title in every page --}}
    @yield('title')

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />

    {{-- Css styling manual --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick slider -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!-- animation css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
    <link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
    <!-- aos css -->
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
</head>

<body>
    {{-- Navbar Include --}}
    @include('layouts.navbar')

    {{-- For spacing content --}}
    <div class="m-3 p-5"></div>

    {{-- Content Custom --}}
    @yield('content')

    {{-- Footer Include --}}
    @include('layouts.footer')

    {{-- Start Requirement JS --}}
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/slick.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/scrolltotop_arrow_code.js') }}"></script>
    <script src="{{ url('assets/js/venobox.min.js') }} "></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
    <script src="{{ url('assets/js/aos.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ url('plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- Galery -->
    <script src="{{ url('assets/js/lightgallery.js') }}"></script>
    <script src="{{ url('assets/js/lg-pager.js') }}"></script>
    <script src="{{ url('assets/js/lg-autoplay.js') }}"></script>
    <script src="{{ url('assets/js/lg-fullscreen.js') }}"></script>
    <script src="{{ url('assets/js/lg-zoom.js') }}"></script>
    <script src="{{ url('assets/js/lg-share.js') }}"></script>

    {{-- Include Scripr For Running in every page --}}
    @yield('script')
</body>

</html>
