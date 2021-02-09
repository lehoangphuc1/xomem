  @include('frontend.header')
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's Cart Area -->
        <div class="hiraola-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="hiraola-product-remove">remove</th>
                                            <th class="hiraola-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="hiraola-product-price">Unit Price</th>
                                            <th class="hiraola-product-quantity">Quantity</th>
                                            <th class="hiraola-product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($content as $v_content)
                                        <tr>
                                            <td class="hiraola-product-remove"><a><i id="{{$v_content->rowId}}" style="cursor: pointer"  class="fa fa-trash delele-cart"
                                                title="Remove"></i></a></td>
                                            <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img src="{{url('public/uploads/product/'.$v_content->options->image)}}" width="90px" alt="Hiraola's Cart Thumbnail"></a></td>
                                            <td class="hiraola-product-name"><a href="javascript:void(0)">{{$v_content->name}}</a></td>
                                            <td class="hiraola-product-price"><span class="amount">{{number_format($v_content->price, 0, '', ',')}} VNĐ</span></td>
                                              @csrf
                                            <td class="quantity" width="200px">
                                                <div class="cart-plus-minus" style="float:left;margin-left: 30px;">
                                                    <input class="cart-plus-minus-box cart_quantity" name="cart_quantity" value="{{$v_content->qty}}" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                                <div class="right-button">
                                                    <input type="hidden" name="rowId_Cart" value="{{$v_content->rowId}}">
                                                    <button style="color:black;" type="submit" class="btn btn-link black" data-toggle="collapse"><i class="fa fa-refresh updatecart" id="{{$v_content->rowId}}"></i></button>
                                                </div>

                                            </td>
                                            <td class="product-subtotal"><span class="amount">{{number_format($v_content->price * $v_content->qty, 0, '', ',')}} VNĐ</span></td> 
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               {{--    <div class="coupon-all">
                                       <div class="coupon2">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div> 
                                    </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <form method="POST" action="{{URL::to('/check-coupon')}}">
                                             @csrf   
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button check_coupon" type="submit" name="check_coupon" value="Apply coupon" type="submit">
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Total <span>{{Cart::total(), 0, '', ','}}VNĐ</span></li>
                                            <li>Tax <span>{{Cart::tax(), 0, '', ','}}VNĐ</span></li>
                                            <li>Shipping Fee <span>Free</span></li>
                                            <li>Subtotal <span>{{Cart::subtotal(), 0, '', ','}} VNĐ</span></li>
                                        </ul>
                                          <?php
                                                $customer_id = Session::get('customer_id');
                                                if($customer_id !=NULL){
                                                ?> 
                                                <a href="{{URL::to('/checkout')}}">Proceed to checkout</a>
                                                <?php
                                                }else{
                                                 ?>
                                                <a href="{{URL::to('/login-checkout')}}">Proceed to checkout</a>
                                              <?php 
                                                }
                                              ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
       @include('frontend.footer')