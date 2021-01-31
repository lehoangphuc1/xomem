  @include('frontend.header')
     <!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Single Product Type</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Single Product</li>
                    </ul>
                </div>
            </div>
        </div>

        
        <!-- Single Product Area -->
        @foreach($detail_product as $key => $pro)
        <div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="sp-img_area">
                                <div class="zoompro-border"> 
                                    <img class="zoompro" src="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="public/uploads/product/{{$pro->product_image}}" alt="Hiraola's Product Image" />
                                </div>
                                <div id="gallery" class="sp-img_slider">
                                    <a class="active" data-image="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="{{url('public/uploads/product/'.$pro->product_image)}}">
                                        <img src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                    </a>
                                    <a data-image="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="{{url('public/uploads/product/'.$pro->product_image)}}">
                                        <img src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                    </a>
                                    <a data-image="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="{{url('public/uploads/product/'.$pro->product_image)}}">
                                        <img src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                    </a>
                                    <a data-image="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="{{url('public/uploads/product/'.$pro->product_image)}}">
                                        <img src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                    </a>
                                    <a data-image="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="{{url('public/uploads/product/'.$pro->product_image)}}">
                                        <img src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                    </a>
                                    <a data-image="{{url('public/uploads/product/'.$pro->product_image)}}" data-zoom-image="{{url('public/uploads/product/'.$pro->product_image)}}">
                                        <img src="{{url('public/uploads/product/'.$pro->product_image)}}" alt="Hiraola's Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#">{{$pro->product_name}}</a></h5>
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
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Price: <a href="javascript:void(0)"><span>{{number_format($pro->product_price, 0, '', ',')}} VNĐ</span></a></li>
                                        <li>Category <a href="javascript:void(0)">{{$pro->category_name}}</a></li>
                                        <li>Brands <a href="javascript:void(0)">{{$pro->brand_name}}</a></li>
                                        <li>Product Code: <a href="javascript:void(0)">{{$pro->product_slug}}</a></li>
                                        <li>Availability: <a href="javascript:void(0)">In Stock</a></li>
                                    </ul>
                                </div>
                                <div class="product-size_box">
                                    <span>Size</span>
                                    <select class="myniceselect nice-select">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                    </select>
                                </div>
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <div class="qty-btn_area">
                                    <ul>
                                        <li><a class="qty-cart_btn" href="cart.html">Add To Cart</a></li>
                                        <li><a class="qty-wishlist_btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li><a class="qty-compare_btn" href="compare.html" data-toggle="tooltip" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    </ul>
                                </div>
                                <div class="hiraola-tag-line">
                                    <h6>Tags:</h6>
                                    <a href="javascript:void(0)">Ring</a>,
                                    <a href="javascript:void(0)">Necklaces</a>,
                                    <a href="javascript:void(0)">Braid</a>
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
                                        <li class="youtube">
                                            <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
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
                    </div>
                </div>
            </div>
        </div>
         <!-- Single Product Area End Here -->



        <!-- Begin  Product Tab Area -->
        <div class="hiraola-product-tab_area-2 sp-product-tab_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sp-product-tab_nav ">
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#specification"><span>Specification</span></a></li>
                                    <li><a data-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                                </ul>
                            </div>
                            <div class="tab-content hiraola-tab_content">
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        {{$pro->product_desc}}
                                    </div>
                                </div>
                                <div id="specification" class="tab-pane" role="tabpanel">
                                    {{$pro->product_content}}
                                </div>
                                <div id="reviews" class="tab-pane" role="tabpanel">
                                    <div class="tab-pane active" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Customer</strong></td>
                                                            <td class="text-right">25/04/2019</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Good product! Thank you very much</p>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12 p-0">
                                                    <label>Your Email <span class="required">*</span></label>
                                                    <input class="review-input" type="email" name="con_email" id="con_email" required>
                                                </div>
                                            </div>
                                            <div class="form-group required second-child">
                                                <div class="col-sm-12 p-0">
                                                    <label class="control-label">Share your opinion</label>
                                                    <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                        translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group last-child required">
                                                <div class="col-sm-12 p-0">
                                                    <div class="your-opinion">
                                                        <label>Your Rating</label>
                                                        <span>
                                                        <select class="star-rating">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="hiraola-btn-ps_right">
                                                    <a href="javascript:void(0)" class="hiraola-btn hiraola-btn_dark">Continue</a>
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
        <!-- Single Product Tab Area End Here -->
        @endforeach
      

        <!-- Related Products-->
        <div class="hiraola-product_area hiraola-product_area-2 section-space_add">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="hiraola-section_title">
                            <h4>Related Products</h4>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider-3">
                        @foreach($related_product as $key=>$related)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="{{URL::to('/detail-product/'.$related->product_slug)}}">
                                            <img class="primary-img" src="{{url('public/uploads/product/'.$related->product_image)}}" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="{{url('public/uploads/product/'.$related->product_image)}}" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker-2">Sale</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a></li>
                                                <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{URL::to('/detail-product/'.$related->product_slug)}}">{{$related->product_name}}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($related->product_price, 0, '', ',')}} VNĐ</span>
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
                        @endforeach
                        </div>
                    </div>
                </div> 
            </div>
        </div>
          <!-- Related Products end here-->


        <!-- Begin Special Product -->
        <div class="hiraola-product_area hiraola-product_area-2 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="hiraola-section_title">
                            <h4>Special Product</h4>
                        </div>


                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider-3">
                            @foreach($special_product as $key => $special)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="{{URL::to('/detail-product/'.$special->product_slug)}}">
                                            <img class="primary-img" src="{{url('public/uploads/product/'.$special->product_image)}}" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="{{url('public/uploads/product/'.$special->product_image)}}" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a></li>
                                                <li><a class="hiraola-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{URL::to('/detail-product/'.$special->product_slug)}}">{{$special->product_name}}</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($special->product_price, 0, '', ',')}} VNĐ</span>
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Special Product -->
   @include('frontend.footer')