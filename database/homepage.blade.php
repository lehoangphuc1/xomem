<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Homepage</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/front-end/images/favicon.ico')}}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/front-end/css/vendor/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{url('public/front-end/css/vendor/font-awesome.css')}}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{url('public/front-end/css/vendor/fontawesome-stars.css')}}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{url('public/front-end/css/vendor/ion-fonts.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{url('public/front-end/css/plugins/slick.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{url('public/front-end/css/plugins/animate.css')}}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{url('public/front-end/css/plugins/jquery-ui.min.css')}}">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="{{url('public/front-end/css/plugins/lightgallery.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{url('public/front-end/css/plugins/nice-select.css')}}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="{{url('public/front-end/css/style.css')}}">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->
    <style>
        li.right-menu.cat-mega-title.fix{ 
        width: 40%;
        float: left;
         }
    </style>
</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here -->
        <!-- Begin Hiraola's Newsletter Popup Area -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off"><i class="ion-android-close"></i></span>
                <div class="subscribe_area text-center">
                    <h2>Sign up for send newsletter?</h2>
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Newsletter Popup Area Here -->

        <!-- Begin Hiraola's Header Main Area -->
        @include('frontend.header')

            <div class="slider-with-category_menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col grid-half order-md-2 order-lg-1">
                        <div class="category-menu">
                            <div class="category-heading">
                                <h2 class="categories-toggle"><span>Shop by categories</span></h2>
                            </div>
                            <div id="cate-toggle" class="category-menu-list">
                                <ul>
                                    @foreach($category as $key => $cate)
                                  
                                   
                                    <li class="right-menu"><a href="shop-left-sidebar.html">{{$cate->category_name}}</a>
                                        <ul class="cat-mega-menu">
                                            @foreach($product as $key => $pro)
                                            <li class="right-menu cat-mega-title fix">
                                            @if($pro->category_id==$cate->category_id)
                                                    <ul>
                                                    <li><a href="shop-left-sidebar.html">{{$pro->product_name}}</a></li>
                                                    </ul>
                                             @endif
                                               
                                            </li>
                                              @endforeach
                                        </ul>
                                    </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col grid-full order-md-1 order-lg-2">
                        <div class="hiraola-slider_area">
                            <div class="main-slider">
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide animation-style-01 bg-1">
                                    <div class="container">
                                        <div class="slider-content">
                                            <h5><span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk</h2>
                                            <h3>Surface Studio 2019</h3>
                                            <h4>Starting at <span>£1599.00</span></h4>
                                            <div class="hiraola-btn-ps_left slide-btn">
                                                <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                        <div class="slider-progress"></div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide animation-style-02 bg-2">
                                    <div class="container">
                                        <div class="slider-content">
                                            <h5><span>-10% Off</span> This Week</h5>
                                            <h2>Phantom4</h2>
                                            <h3>Pro+ Obsidian</h3>
                                            <h4>Starting at <span>£809.00</span></h4>
                                            <div class="hiraola-btn-ps_left slide-btn">
                                                <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                        <div class="slider-progress"></div>
                                    </div>
                                </div>
                                <div class="single-slide animation-style-02 bg-3">
                                    <div class="container">
                                        <div class="slider-content">
                                            <h5><span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk</h2>
                                            <h3>Surface Studio 2019</h3>
                                            <h4>Starting at <span>£1599.00</span></h4>
                                            <div class="hiraola-btn-ps_left slide-btn">
                                                <a class="hiraola-btn" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                        <div class="slider-progress"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col grid-half grid-md_half order-md-2 order-lg-3">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_1.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="hiraola-banner_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_2.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_3.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_4.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Begin Hiraola's Product Area -->
        <div class="hiraola-product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hiraola-section_title">
                            <h4>New Arrival</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider">
                            <!-- Begin Hiraola's Slide Item Area -->

                             @foreach($newest_product as $key => $new)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="public/uploads/product/{{$new->product_image}}" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="public/uploads/product/{{$new->product_image}}" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a></li>
                                                <li><a class="hiraola-add_compare" href="#" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="single-product.html">{{$new->product_name}}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($new->product_price, 0, '', ',')}} VNĐ</span>
                                            </div>
                                            <div class="additional-add_action">
                                                <ul>
                                                    <li><a class="hiraola-add_compare" href="#" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Area End Here -->





        <div class="static-banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="static-banner-image"></div>
                        <div class="static-banner-content">
                            <p><span>-25% Off</span>This Week</p>
                            <h2>Featured Product</h2>
                            <h3>Meito Accessories 2019</h3>
                            <p class="schedule">
                                Starting at
                                <span> £1209.00</span>
                            </p>
                            <div class="hiraola-btn-ps_left">
                                <a href="shop-left-sidebar.html" class="hiraola-btn">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Begin Hiraola's Product Tab Area -->
        <div class="hiraola-product-tab_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-tab">
                            <div class="hiraola-tab_title">
                                <h4>New Products</h4>
                            </div>
                            <ul class="nav product-menu">
                                @foreach($category as $cate)
                                 <li><a  class="{{ $cate->category_id == 1 ? 'active' : '' }}" data-toggle="tab" href="#tab{{$cate->category_id}}"><span>{{ $cate->category_name}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            @foreach($category as $key => $cate)
                            <div id="tab{{$cate->category_id}}" class="tab-pane {{ $cate->category_id == 1 ? 'active' : '' }} show" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    @foreach($product as $key => $pro)
                                    @if($pro->category_id==$cate->category_id)
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="public/uploads/product/{{$pro->product_image}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="public/uploads/product/{{$pro->product_image}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                                                class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="#" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="#">{{$pro->product_name}}</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">{{number_format($pro->product_price, 0, '', ',')}} VNĐ</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Tab Area End Here -->







        <div class="hiraola-banner_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_5.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_6.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Begin Hiraola's Product Tab Area Two -->
        <div class="hiraola-product-tab_area-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-tab">
                            <ul class="nav product-menu">
                                @foreach($category_special as $cate)
                                 <li><a  class="{{ $cate->category_id == 5 ? 'active' : '' }}" data-toggle="tab" href="#tab{{$cate->category_id}}"><span>{{ $cate->category_name}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            @foreach($category_special as $key => $cate)
                            <div id="tab{{$cate->category_id}}" class="tab-pane {{ $cate->category_id == 5 ? 'active' : '' }} show" role="tabpanel">
                                <div class="hiraola-product-tab_slider-3">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    @foreach($product as $key => $pro)
                                    @if($pro->category_id==$cate->category_id)
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="#" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="#">{{$pro->product_name}}</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">{{number_format($pro->product_price, 0, '', ',')}} VNĐ</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Tab Area TwoEnd Here -->







        <div class="hiraola-banner_area-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_5.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_6.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="shop-left-sidebar.html">
                                <img class="img-full" src="{{url('public/front-end/images/banner/1_5.jpg')}}" alt="Hiraola's Banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Begin Hiraola's Product Tab Area Three -->
        <div class="hiraola-product-tab_area-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-tab">
                            <div class="hiraola-tab_title">
                                <h4>Trending Products</h4>
                            </div>
                            <ul class="nav product-menu">
                                <li><a class="active" data-toggle="tab" href="#necklaces-2"><span>Necklaces</span></a></li>
                                <li><a data-toggle="tab" href="#earrings-2"><span>Earrings</span></a></li>
                                <li><a data-toggle="tab" href="#bracelet-2"><span>Bracelet</span></a></li>
                                <li><a data-toggle="tab" href="#anklet-2"><span>Anklet</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            <div id="necklaces-2" class="tab-pane active show" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">George Nelson
                                                            Sunburst Cl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£70.00</span>
                                                        <span class="old-price">£85.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                            Proin
                                                            he...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£35.20</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£77.44</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£99.60</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">George Nelson
                                                            Sunburst Cl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£70.00</span>
                                                        <span class="old-price">£85.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                            Camp...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£30.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                </div>
                            </div>
                            <div id="earrings-2" class="tab-pane" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£90.36</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">George Nelson
                                                            Sunburst Cl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£70.00</span>
                                                        <span class="old-price">£85.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                            Camp...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£30.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">George Nelson
                                                            Sunburst Cl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£70.00</span>
                                                        <span class="old-price">£85.00</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>')}}
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                            Proin
                                                            he...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£35.20</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£77.44</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                </div>
                            </div>
                            <div id="bracelet-2" class="tab-pane" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Global Knives:
                                                            Profession...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.25</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£77.44</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£23.43</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                            Block...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£50.43</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£90.36</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Global Knives:
                                                            Profession...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.25</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£76.44</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                            Proin
                                                            he...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£35.20</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                </div>
                            </div>
                            <div id="anklet-2" class="tab-pane" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£90.36</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Global Knives:
                                                            Profession...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.25</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£76.44</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-3.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                            Proin
                                                            he...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£35.20</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-2.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-9.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Global Knives:
                                                            Profession...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£60.25</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-6.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                            Alonza Se...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£77.44</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-8.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-5.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                            Styl...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£23.43</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="{{url('public/front-end/images/product/medium-size/1-4.jpg')}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/front-end/images/product/medium-size/1-7.jpg')}}" alt="Hiraola's Product Image">
                                                </a>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                            Block...</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">£50.43</span>
                                                    </div>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li><a class="hiraola-add_compare" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Tab Area Three End Here -->



        <!-- Begin Hiraola's Shipping Area -->
        <div class="hiraola-shipping_area">
            <div class="container">
                <div class="shipping-nav">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="{{url('public/front-end/images/shipping-icon/1.png')}}" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>Free Uk Standard Delivery</h6>
                                    <p>Designated day delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="{{url('public/front-end/images/shipping-icon/2.png')}}" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>Freshyly Prepared Ingredients</h6>
                                    <p>Made for your delivery date</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="{{url('public/front-end/images/shipping-icon/3.png')}}" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>98% Of Anta Clients</h6>
                                    <p>Reach their personal goals set</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="{{url('public/front-end/images/shipping-icon/4.png')}}" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>Winner Of 15 Awards</h6>
                                    <p>Healthy food and drink 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Shipping Area End Here -->


        <!-- Begin Hiraola's Footer Area -->
        <div class="hiraola-footer_area">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widgets_info">

                                <div class="footer-widgets_logo">
                                    <a href="#">
                                        <img src="{{url('public/front-end/images/footer/logo/1.png')}}" alt="Hiraola's Footer Logo">
                                    </a>
                                </div>


                                <div class="widget-short_desc">
                                    <p>We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                    </p>
                                </div>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-widgets_area">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="footer-widgets_title">
                                            <h6>Product</h6>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="#">Prices drop</a></li>
                                                <li><a href="#">New products</a></li>
                                                <li><a href="#">Best sales</a></li>
                                                <li><a href="#">Contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="footer-widgets_info">
                                            <div class="footer-widgets_title">
                                                <h6>About Us</h6>
                                            </div>
                                            <div class="widgets-essential_stuff">
                                                <ul>
                                                    <li class="hiraola-address"><i class="ion-ios-location"></i><span>Address:</span> The Barn, Ullenhall, Henley
                                                        in
                                                        Arden B578 5CC, England</li>
                                                    <li class="hiraola-phone"><i class="ion-ios-telephone"></i><span>Call Us:</span> <a href="tel://+123123321345">+123 321 345</a>
                                                    </li>
                                                    <li class="hiraola-email"><i class="ion-android-mail"></i><span>Email:</span> <a href="mailto://info@yourdomain.com">info@yourdomain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="instagram-container footer-widgets_area">
                                            <div class="footer-widgets_title">
                                                <h6>Sign Up For Newslatter</h6>
                                            </div>
                                            <div class="widget-short_desc">
                                                <p>Subscribe to our newsletters now and stay up-to-date with new collections</p>
                                            </div>
                                            <div class="newsletter-form_wrap">
                                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                                    <div id="mc_embed_signup_scroll">
                                                        <div id="mc-form" class="mc-form subscribe-form">
                                                            <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter your email" />
                                                            <button class="newsletter-btn" id="mc-submit">
                                                                <i class="ion-android-mail" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('frontend.footer')