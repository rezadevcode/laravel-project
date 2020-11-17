@extends('layouts.app')
@section('content')
    <main class="content">
        
        <section class="hero">
            <div class="swiper-container swiper-hero">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/banner.png') }}" class="d-block w-100"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/banner-1.png') }}" class="d-block w-100"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/banner.png') }}" class="d-block w-100"></div>
                    <div class="swiper-slide"><img src="{{ asset('images/banner-1.png') }}" class="d-block w-100"></div>
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
                        <a href="{{ url('product/category') }}">
                            <img src="{{ asset('images/category/category.png') }}" alt="ic-category">
                            <span>All Category</span>
                        </a>
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
                <a href="{{ url('order/tracking') }}" class="detail">See All <i class="fas fa-chevron-right"></i> </a>
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
                            <img src="{{ asset('images/icon/status_order/deactive/approval.png') }}" alt="approval">
                            <div class="description">
                                <p>Leader Approval</p>
                            </div>
                        </li>
                        <li class="track step-4 col-2">
                            <img src="{{ asset('images/icon/status_order/deactive/prepare.png') }}" alt="prepare">
                            <div class="description">
                                <p>Preparing Asset</p>
                            </div>
                        </li>
                        <li class="track step-5 col-2">
                            <img src="{{ asset('images/icon/status_order/deactive/pickup.png') }}" alt="pickup">
                            <div class="description">
                                <p>Pick Up</p>
                            </div>
                        </li>
                        <li class="track step-6 col-2">
                            <img src="{{ asset('images/icon/status_order/deactive/completed.png') }}" alt="completed">
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

        <section class="product-list recomendation">
            <div class="row">
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="card">
                        <a href="{{ url('product/detail')}}">
                            <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                            <div class="card-body">
                                <p class="card-text">Handphone Samsung Galaxy J8</p>
                                <p class="card-text price">Rp 5.000.000</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Modal -->
    <div class="modal fade" id="opening-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('images/condition/order-canceled.png') }}" alt="img-modal">
                    {{-- <img src="../../assets/image/condition/order-canceled.png" alt="img-modal"> --}}
                    <h3>Welcome, Jessy Milenia</h3>
                    <p>
                        Please complete your Profile below including 
                        your organization information and your Heirarchy Leader.
                    </p>
                    <a href="../profile/main/index.html" class="btn btn-success">Click Here</a>
                </div>
            </div>
        </div>
    </div>
@stop