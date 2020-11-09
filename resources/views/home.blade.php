<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
    {{-- <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../footer.css"> --}}
</head>

<body>

    <div class="container">

        <!-- Navbar Section -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo/gojek.png') }}" alt="logo">
                </a>
                <!-- <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="../../assets/icon/category/category.png" alt="ic-category">
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
                            <img src="../../assets/icon/user.png" alt="user">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Jessy
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Sign Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </nav>
        </header>
        <!-- End Navbar Section -->



        <!-- Main Content -->
        <main class="content">
            
            <section class="hero">
                <div class="swiper-container swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>

            <section class="category">
                <div class="title">Category</div>
                <div class="swiper-container swiper-category">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/category.png') }}" alt="ic-category">
                            <span>All Category</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/accessories.png') }}" alt="ic-accessories">
                            <span>Accessories</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/gadget.png') }}" alt="ic-gadget">
                            <span>Gadget</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/laptop.png') }}" alt="ic-laptop">
                            <span>Laptop / Desktop</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/monitor.png') }}" alt="ic-monitor">
                            <span>Monitor</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/network.png') }}" alt="ic-network">
                            <span>Network</span>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/category/peripherals.png') }}" alt="ic-peripherals">
                            <span>Peripheral Equipment</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="recommendation">
                <div class="title">Recommendation for You</div>
                <div class="swiper-container swiper-recommendation">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide">
                            <img src="{{ asset('images/product/recommendation/macbook.png') }}" alt="macbook">
                            <p>Macbook Pro</p>
                        </a>
                        <a href="#" class="swiper-slide">
                            <img src="{{ asset('images/product/recommendation/samsung.png') }}" alt="samsung">

                            <p>Samsung 5 Series</p>
                        </a>
                        <a href="#" class="swiper-slide">
                            <img src="{{ asset('images/product/recommendation/mouse.png') }}" alt="mouse">
                            <p>Mouse Wireless Logitech</p>
                        </a>
                        <a href="#" class="swiper-slide">
                            <img src="{{ asset('images/product/recommendation/lcd.png') }}" alt="lcd">
                            <p>Monitor Acer</p>
                        </a>
                        <a href="#" class="swiper-slide">
                            <img src="{{ asset('images/product/recommendation/converter.png') }}" alt="converter">
                            <p>Converter Thunderbolt</p>
                        </a>
                    </div>
                </div>
            </section>

            <section class="status-order">
                <div class="title">
                    Status Order
                    <a href="#" class="detail">See All <i class="fas fa-chevron-right"></i> </a>
                </div>
                <div class="card">
                    <div class="item-order">Macbook Pro 2019</div>
                    <div class="card-body track-order">
                        <ul id="track-list" class="text-center row">
                            <li class="track active step-1 col-2">
                                <img src="{{ asset('images/icon/status_order/active/request.png') }}" alt="request">
                                <div class="description">
                                    <p>Order Request</p>
                                    <p>2-9-2020 11:20</p>
                                </div>
                            </li>
                            <li class="track active step-2 col-2">
                                <img src="{{ asset('images/icon/status_order/active/confirm.png') }}" alt="confirm">
                                <div class="description">
                                    <p>Admin Confirmation</p>
                                    <p>2-9-2020 14:50</p>
                                </div>
                            </li>
                            <li class="track step-3 col-2">
                                <img src="{{ asset('images/icon/status_order/active/approval.png') }}" alt="approval">
                                <div class="description">
                                    <p>Leader Approval</p>
                                </div>
                            </li>
                            <li class="track step-4 col-2">
                                <img src="{{ asset('images/icon/status_order/active/prepare.png') }}" alt="prepare">
                                <div class="description">
                                    <p>Preparing Asset</p>
                                </div>
                            </li>
                            <li class="track step-5 col-2">
                                <img src="{{ asset('images/icon/status_order/active/pickup.png') }}" alt="pickup">
                                <div class="description">
                                    <p>Pick Up</p>
                                </div>
                            </li>
                            <li class="track step-6 col-2">
                                <img src="{{ asset('images/icon/status_order/active/completed.png') }}" alt="completed">
                                <div class="description">
                                    <p>Order Completed</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="m-description">
                        <p>Order Request</p>
                        <p>2-9-2020 11:20</p>
                    </div>
                </div>
            </section>

            <section class="popular">
                <div class="card">
                    <div class="card-body">
                        <div class="swiper-container swiper-popular">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <span>Popular</span>
                                </div>
                                <div class="swiper-slide active">
                                    <span>Gadget</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>Laptop / PC</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>Monitor</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>Accessories</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>Peripheral Equipment</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>Rack System</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-list">
                <div class="row">
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="card">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
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
    <script src="{{ asset('js/home/script.js') }}"></script>

</body>

</html>