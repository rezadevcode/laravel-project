<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/product/list/style.css') }}">
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
                <div class="collapse navbar-collapse" id="navbarNav">
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
                </div>
            </nav>
        </header>
        <!-- End Navbar Section -->


        <!-- Main Content -->
        <main class="content">
            <section class="title">
                <div class="card">
                    <div class="card-body">
                        <div class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('product/category') }}">All Category</a>
                            </li>
                            <li class="breadcrumb-item active">Gadget</li>
                        </div>
                        <h1>Category Gadget</h1>
                    </div>
                </div>
            </section>

            <section class="categories">
                <div class="row">
                    <div id="sidebar" class="col col-lg-3 col-md-4">
                        <div class="card sub-categories">
                            <div class="card-header">All Gadget</div>
                            <ul class="list-group list-group-flush">
                                <a href="#">
                                    <li class="list-group-item">
                                        Asus
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Evercoss
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Galaxy
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Huawei
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        iPhone
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Lenovo
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        LG
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Motorola
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Nokia
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        OPPO
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Realme
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Samsung
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Vivo
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                                <a href="#">
                                    <li class="list-group-item">
                                        Xiaomi
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-9 col-md-8 col-sm-12">
                        <div class="list-category">
                            <div class="row sort-title">
                                <div class="col col-6">
                                    <p>Menampilkan 999 produk untuk "Gadget" </p>
                                </div>
                                <div id="sorter" class="col col-6">
                                    <span id="srt">Sorting</span>
                                    <div class="form-group">
                                        <i class="fas fa-chevron-down"></i>
                                        <select class="form-control selection" id="company" name="company">
                                            <option>Relevant</option>
                                            <option>Terendah</option>
                                            <option>Tertinggi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row content-category">
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-3 col-lg-4  col-6">
                                    <div class="card">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

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
    <script src="{{ asset('js/product/list/script.js') }}"></script>

</body>

</html>