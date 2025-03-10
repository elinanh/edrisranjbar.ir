<!DOCTYPE html>
<html lang="fa">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مدیریت - @yield('title')</title>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <link href="{{ asset('assets/fonts/fontawesome-6.2.1/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/fonts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2-override.css') }}" rel="stylesheet">
</head>

<body id="page-top" dir="rtl">
    <!-- Page Wrapper -->

    <div class="row justify-content-center my-md-5 mx-0">
        <div id="wrapper"
            class="col-md-11 px-0 shadow rounded-top-right-1 rounded-bottom-right-1 rounded-bottom-left-1">
            @include('templates.sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column rounded-bottom-left-1">
                <!-- Main Content -->
                <div id="content">
                    <nav
                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow rounded-top-left-1">
                        <button id="sidebarToggleTop" class="btn d-md-none btn-circle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle ml-2 border rounded" href="#" id="userDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-sm fa-fw text-gray-600"></i>
                                    <span class="mr-2 d-none d-lg-inline text-dark">{{ auth('admin')->user()->fullName
                                        }}</span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu shadow animated--grow-in text-right"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                        <i class="fas fa-user fa-sm fa-fw ml-2 text-gray-600"></i>
                                        حساب کاربری
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw ml-2 text-gray-600"></i>
                                        خروج
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    @yield('content')
                </div>
                <!-- End of Content Wrapper -->
                <footer class="sticky-footer bg-white rounded-bottom-left-1">
                    <div class="container my-auto">
                        <div class="copyright text-center text-muted my-auto">
                            <span>
                                طراحی و توسعه توسط &nbsp;
                                <a href="https://www.itadbeer.com/" target="_blank">
                                    <strong>آی‌تدبیر</strong>
                                </a>
                            </span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- End of Page Wrapper -->
        </div>


        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/sb-admin-2.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
</body>

</html>