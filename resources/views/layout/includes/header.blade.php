    <!-- Navigation -->
    <div class="header">
        <header class="full-width">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mainNavCol">
                        <!-- logo -->
                        <div class="logo mainNavCol">
                            <a href="/">
                                {{-- <img src="assets/img/logo.png" class="img-fluid" alt="Logo"> --}}
                                <img src="{{ asset('/web_logo/' . $setting->logo) ?? '' }}" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <!-- logo -->
                        <div class="main-search mainNavCol">
                            <form class="main-search search-form full-width">
                                <div class="row">
                                    <!-- location picker -->
                                    <div class="col-lg-6 col-md-5">
                                        <a href="#" class="delivery-add p-relative"> <span class="icon"><i
                                                    class="fas fa-map-marker-alt"></i></span>
                                            {{-- <span class="address">Brooklyn, NY</span> --}}
                                            <span class="address">{{ $setting->location ?? '' }}</span>
                                        </a>
                                        <div class="location-picker">
                                            <input type="text" class="form-control"
                                                placeholder="Enter a new address">
                                        </div>
                                    </div>
                                    <!-- location picker -->
                                    <!-- search -->
                                    <div class="col-lg-6 col-md-7">
                                        <div class="search-box padding-10">
                                            <input type="text" class="form-control"
                                                placeholder="Pizza, Burger, Chinese">
                                        </div>
                                    </div>
                                    <!-- search -->
                                </div>
                            </form>
                        </div>
                        <div class="right-side fw-700 mainNavCol">
                            <div class="gem-points">
                                <a href="/list_view"> <i class="fas fa-concierge-bell"></i>
                                    <span>Order Now</span>
                                </a>
                            </div>
                            <div>
                               {{-- @php
                                   dd(Auth::guard('customer')->user()->firstName);
                                @endphp --}}
                                <!-- class="catring parent-megamenu" -->

                                {{-- @if (Auth::guard('customer')->check())
                                    @dd('login');
                                <p>User is login.</p>
                                @endif --}}


                            <div class="mobile-search">
                                <a href="#" data-toggle="modal" data-target="#search-box">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>

                            @if (Auth::guard('customer')->check())
                                <div class="user-details p-relative">
                                    <a href="#" class="text-light-white fw-500">
                                        <img style="height:40px" src="{{ asset('/user_images/' . Auth::guard('customer')->user()->image) }}" class="rounded-circle" alt="userimg">
                                        <span>{{ Auth::guard('customer')->user()->firstName }}</span>
                                    </a>
                                    <div class="user-dropdown">
                                        <ul>
                                            <li>
                                                <a href="order-details.html">
                                                    <div class="icon"><i class="flaticon-rewind"></i></div>
                                                    <span class="details">Past Orders</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="order-details.html">
                                                    <div class="icon"><i class="flaticon-takeaway"></i></div>
                                                    <span class="details">Upcoming Orders</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-breadbox"></i></div>
                                                    <span class="details">Saved</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-gift"></i></div>
                                                    <span class="details">Gift cards</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/profile">
                                                    <div class="icon"><i class="flaticon-refer"></i></div>
                                                    <span class="details">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-diamond"></i></div>
                                                    <span class="details">Perks</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-user"></i></div>
                                                    <span class="details">Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="icon"><i class="flaticon-board-games-with-roles"></i></div>
                                                    <span class="details">Help</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="user-footer">
                                            <span class="text-light-black"></span>
                                            <a href="{{ url('/logout') }}">Sign Out</a>
                                        </div>
                                    </div>

                                </div>

                                @else

                                <div>
                                    <a href="/login"><span>Login</span></a>|
                                    <a href="/register"><span>Sign-up</span></a>
                                </div>

                            @endif
                            <!-- mobile search -->
                            <!-- user notification -->
                            @auth
                                <div class="cart-btn notification-btn">
                                    <a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
                                        <span class="user-alert-notification"></span>
                                    </a>
                                    <div class="notification-dropdown">
                                        <div class="product-detail">
                                            <a href="#">
                                                <div class="img-box">
                                                    <img src="assets/img/shop-1.png" class="rounded" alt="image">
                                                </div>
                                                <div class="product-about">
                                                    <p class="text-light-black">Lil Johnny’s</p>
                                                    <p class="text-light-white">Spicy Maxican Grill</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="rating-box">
                                            <p class="text-light-black">How was your last order ?.</p> <span
                                                class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <span class="text-dark-white"><i class="fas fa-star"></i></span>
                                            <cite class="text-light-white">Ordered 2 days ago</cite>
                                        </div>
                                    @endauth
                                </div>
                            </div>
                            <!-- user notification -->
                            <!-- user cart -->

                            <div class="cart-btn cart-dropdown">
                                {{-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span> --}}
                                <a href="#" class="text-light-green fw-700"> <i
                                        class="fas fa-shopping-bag"></i>
                                    <span class="user-alert-cart">{{ count((array) session('cart')) }}</span>
                                </a>
                                <div class="cart-detail-box" style="width: 400px">
                                    <div class="card" id="cart">
                                        <div class="card-header padding-15">Your Order</div>
                                        <div class="card-body no-padding">
                                            <div class="cat-product-box">
                                                <div class="cat-product">

                                                    <div class="cat-name">
                                                        @php $total = 0 @endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                    <div class="cat-product-box">
                                    <div class="cat-product row">
                                        <div class="cat-name col-8">
                                            <a href="#">
                                                <p class="text-light-green fw-700"><span class="text-dark-white">{{ $details['quantity'] }}</span> {{ $details['name'] }}</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                            </a>
                                        </div>
                                        <div class="price col-2"> <a href="#" class="text-dark-white fw-500">
                                            ${{ $details['price'] }}
                                                     </a>
                                        </div>

                                        <div class="delete-btn col-2">
                                            <a href="{{ route('remove')}}" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>

                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                            </div>
                                        </div>

                                            <div class="item-total">
                                                <div class="total-price border-0"> <span
                                                        class="text-dark-white fw-700">Items subtotal:</span>
                                                    <span class="text-dark-white fw-700">$ {{ $total }}</span>
                                                </div>
                                                <div class="empty-bag padding-15"> <a href="#">Empty bag</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer padding-15"> <a href="{{ url('/checkout') }}"
                                                class="btn-first green-btn text-custom-white full-width fw-500">Proceed
                                                to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- user cart -->
                        </div>
                    </div>
                    <div class="col-sm-12 mobile-search">
                        <div class="mobile-address">
                            <a href="#" class="delivery-add" data-toggle="modal" data-target="#address-box">
                                <span class="address">Brooklyn, NY</span>
                            </a>
                        </div>
                        <div class="sorting-addressbox"> <span class="full-address text-light-green">Brooklyn, NY
                                10041</span>
                            <div class="btns">
                                <div class="filter-btn">
                                    <button type="button"><i class="fas fa-sliders-h text-light-green fs-18"></i>
                                    </button> <span class="text-light-green">Sort</span>
                                </div>
                                <div class="filter-btn">
                                    <button type="button"><i class="fas fa-filter text-light-green fs-18"></i>
                                    </button> <span class="text-light-green">Filter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="main-sec"></div>
    <!-- Navigation -->
