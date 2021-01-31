
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
                                   
                                    <li class="right-menu"><a href="{{URL::to('/category-product/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                                        <ul class="cat-mega-menu">
                                            @foreach($product as $key => $pro)
                                            <li class="right-menu cat-mega-title fix">
                                            @if($pro->category_id==$cate->category_id)
                                                    <ul>
                                                    <li><a href="{{URL::to('/detail-product/'.$pro->product_slug)}}">{{$pro->product_name}}</a></li>
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
                                        <a href="{{URL::to('/detail-product/'.$new->product_slug)}}">
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
                                            <h6><a class="product-name" href="{{URL::to('/detail-product/'.$new->product_slug)}}">{{$new->product_name}}</a></h6>
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
                                                <a href="{{URL::to('/detail-product/'.$pro->product_slug)}}">
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
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{URL::to('/detail-product/'.$pro->product_slug)}}">{{$pro->product_name}}</a></h6>
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
                                                <a href="{{URL::to('/detail-product/'.$pro->product_slug)}}">
                                                    <img class="primary-img" src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
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
                                                    <h6><a class="product-name" href="{{URL::to('/detail-product/'.$pro->product_slug)}}">{{$pro->product_name}}</a></h6>
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
                                <h4>Special Products</h4>
                            </div>
                            <ul class="nav product-menu">
                               @foreach($category_special as $cate)
                                 <li><a  class="{{ $cate->category_id == 6 ? 'active' : '' }}" data-toggle="tab" href="#tabb{{$cate->category_id}}"><span>{{ $cate->category_name}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            @foreach($category_special as $key => $cate)
                            <div id="tabb{{$cate->category_id}}" class="tab-pane {{ $cate->category_id == 6 ? 'active' : '' }} show" role="tabpanel">
                                <div class="hiraola-product-tab_slider-2">
                                   @foreach($product as $key => $pro)
                                    @if($pro->category_id==$cate->category_id)
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{URL::to('/detail-product/'.$pro->product_slug)}}">
                                                    <img class="primary-img" src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                                    <img class="secondary-img" src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
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
                                                    <h6><a class="product-name" href="{{URL::to('/detail-product/'.$pro->product_slug)}}">{{$pro->product_name}}</a></h6>
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
                                                            <li><i class="fa fa-star-of-david"></i></li>
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

           @include('frontend.footer')