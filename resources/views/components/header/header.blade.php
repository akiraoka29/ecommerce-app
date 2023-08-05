<?php
    $limitCategory = 10;
?>
<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +62 81233008771</li>
                            <li><i class="ti-email"></i> support@yukbelanja.com</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            {{-- <li><i class="ti-location-pin"></i> Store location</li> --}}
                            {{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
                            @if(!$user)
                            <li><i class="ti-power-off"></i><a href="{{ route('signin.index') }}">{{ __('home.login') }}</a></li>
                            @else 
                            <li><i class="ti-user"></i> <a href="#">{{ __('home.my_account') }}</a></li>
                            <li><i class="ti-power-off"></i><a href="{{ route('logout') }}">{{ __('home.logout') }}</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option selected="selected">{{ __('home.all_category') }}</option>
                                @foreach($categories as $key => $category)
                                @if($key < $limitCategory)
                                <option value="{{ strtolower($category->category_name) }}">{{ $category->category_name }}</option>
                                @endif
                                @endforeach
                            </select>
                            <form>
                                <input name="search" placeholder="{{ __('home.search_bar') }}....." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        {{-- <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div> --}}
                        <div class="sinlge-bar shopping">
                            <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{ count($cart) }}</span></a>
                            <!-- Shopping Item -->
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>{{ count($cart) }} Items</span>
                                    <a href="{{ route('cart.index') }}">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                <?php
                                    $grandTotal = 0;
                                ?>
                                    @foreach($cart as $item)
                                    <?php
                                        $thumbnail = ($item['thumbnail'] !== '') ? $item['thumbnail'] : 'https://via.placeholder.com/70x70';
                                        // Calculate Item Price
                                        $grandTotal += $item['price'] * $item['quantity'];
                                    ?>
                                    <li>
                                        <form method="post" action="{{ route('cart.remove', $item['product_id']) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="remove" title="Remove this item"><i class="fa fa-remove"></i></button>
                                        </form>
                                        <a class="cart-img" href="#"><img src="{{ $thumbnail }}" alt="#" with="70" height="70"></a>
                                        <h4><a href="#">{{ $item['product_name'] }}</a></h4>
                                        <p class="quantity">{{ $item['quantity'] }}x - <span class="amount">Rp {{ number_format($item['price']) }}</span></p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">Rp {{ number_format($grandTotal) }}</span>
                                    </div>
                                    <a href="{{ route('checkout.index') }}" class="btn animate">Checkout</a>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    @if(Route::currentRouteName() == 'home')
                    <div class="col-lg-3">
                        <div class="all-category">
                            <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>{{ __('home.category') }}</h3>
                            <ul class="main-category">
                                @foreach($categories as $key => $category)
                                @if($key < $limitCategory)
                                <li><a href="#">{{ $category->category_name }}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="{{ route('home') }}">{{ __('home.home') }}</a></li>
                                                {{-- <li><a href="#">Product</a></li>								 --}}
                                                {{-- <li><a href="#">Service</a></li> --}}
                                                {{-- <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li> --}}
                                                {{-- <li><a href="#">Pages</a></li>									
                                                <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                    </ul>
                                                </li> --}}
                                                {{-- <li><a href="contact.html">{{ __('home.contact_us') }}</a></li> --}}
                                            </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->