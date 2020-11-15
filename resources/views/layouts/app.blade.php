<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($titlepage)?ucwords($titlepage):'' }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/product/detail/smoothproducts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/'.$css) }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
    <div class="container">
        <!-- Navbar Section -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo/gojek.png') }}" alt="logo">
                </a>
                {{-- <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('product/category') }}">
                                <img src="{{ asset('images/category/category.png') }}" alt="ic-category">
                                <span>Category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline">
                                <div class="input-group">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Find Gadget">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item">
                            <i class="fas fa-bell"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fas fa-shopping-cart"></i>
                        </li>
                        <div class="separator"></div>
                        <li class="nav-item">
                            <img src="{{ asset('images/icon/user.png') }}" alt="user">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    user name
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Sign Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> --}}
            </nav>
        </header>
        <!-- End Navbar Section -->
        <!-- Main Content -->
        @yield('content')
        <!-- End Main Content -->
    </div>
    <!-- Footer Section -->
    <footer>
        <p><strong>© 2020 Gojek</strong></p>
        <p>
            Gojek is a trademark of PT Aplikasi Karya Anak Bangsa. 
            Registered in the Directorate General of Intellectual Property of the Republic of Indonesia.
        </p>
    </footer>
    <!-- End Footer Section -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/product/detail/smoothproducts.min.js') }}"></script>

    @if(isset($js))
        <script src="{{ asset('js/'.$js) }}"></script>
    @endif
</body>

</html>