<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/product/category/style.css') }}">
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
                            <a class="nav-link" href="#">
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
                                    {{ $result['name'] }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="{{ url('/logout') }}">Sign Out</a>
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
                            <li class="breadcrumb-item active">Library</li>
                        </div>
                        <h1>All Category</h1>
                    </div>
                </div>
            </section>

            <section class="categories">
                <div class="row">
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/accessories.png') }}" alt="accessories">
                                    <p>Accessories</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/gadget.png') }}" alt="gadget">
                                    <p>Gadget</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/laptop.png') }}" alt="laptop">
                                    <p>Laptop</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/monitor.png') }}" alt="monitor">
                                    <p>Monitor</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/network.png') }}" alt="network">
                                    <p>Network</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/equipment.png') }}" alt="equipment">
                                    <p>Equipment</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/rack.png') }}" alt="rack">
                                    <p>Rack System</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/printer.png') }}" alt="printer">
                                    <p>Printer</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/storage-external.png') }}" alt="storage-external">
                                    <p>Storage External</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/storage-internal.png') }}" alt="storage-internal">
                                    <p>Storage Internal</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/voices.png') }}" alt="voices">
                                    <p>Voices</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/ram.png') }}" alt="ram">
                                    <p>RAM</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/software.png') }}" alt="software">
                                    <p>Software</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/services.png') }}" alt="services">
                                    <p>Services</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="{{ url('product/list') }}">
                            <div class="card category">
                                <div class="card-body">
                                    <img src="{{ asset('images/category/monitoring.png') }}" alt="monitoring">
                                    <p>Monitoring</p>
                                </div>
                            </div>
                        </a>
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
    {{-- <script src="script.js"></script> --}}

</body>

</html>