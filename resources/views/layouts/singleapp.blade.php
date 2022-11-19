<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jemput Bola - Semampir</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/sby.svg') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo/logo.png') }}">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                        <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="{{ route('biodata') }}"><i
                                            class="icon-mid bi bi-person me-2"></i>
                                        Biodata</a></li>
                                <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i
                                            class="icon-mid bi bi-door-closed-fill me-2"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="container-fluid">
        <div class="row container m-auto ">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-light-success alert-dismissible show fade">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-sm btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('primary'))
                    <div class="alert alert-light-primary alert-dismissible fade show" role="alert">
                        {{ session()->get('primary') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="alert alert-light-warning alert-dismissible fade show" role="alert">
                        {{ session()->get('warning') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-light-danger alert-dismissible show fade">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        @yield('content')

        <div class="row container m-auto mt-5">
            <div class="col-12">
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 @ Kecamatan Semampir</p>
                        </div>
                        <div class="float-end">
                            <p>Surabaya</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
