  @include('frontend.header')
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's Checkout Area -->
        <div class="checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <form action="{{URL::to('/order-place')}}" method="POST">
                            {{csrf_field()}}
                            <div class="checkbox-form">
                                <h3>Select the payment method</h3>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                            <span> 
                                                <label><input style="margin-right: 5px;cursor: pointer;"  name="payment_option" value="1" type="checkbox">Payment by ATM</label>
                                            </span>
                                           <span class="span2" style="margin-left:20px;">
                                                <label><input style="margin-right: 5px;cursor: pointer;" name="payment_option" value="2" type="checkbox">Payment by Cash</label>
                                           </span>
                                             <span class="span3" style="margin-left:20px;">
                                                <label><input style="margin-right: 5px;cursor: pointer;" name="payment_option" value="3" type="checkbox">Payment by Debit card</label>
                                           </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                    <input value="order" name="send_order" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hiraola-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div class="table-content table-responsive">
                                   <?php
                                $content = Cart::content();
                                ?>
                                <h1>Check the cart</h1>
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
                                            <td class="hiraola-product-remove"><a href="{{URL::to('/delete-cart/'.$v_content->rowId)}}"><i class="fa fa-trash"
                                                title="Remove"></i></a></td>
                                            <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img src="{{url('public/uploads/product/'.$v_content->options->image)}}" width="90px" alt="Hiraola's Cart Thumbnail"></a></td>
                                            <td class="hiraola-product-name"><a href="javascript:void(0)">{{$v_content->name}}</a></td>
                                            <td class="hiraola-product-price"><span class="amount">{{number_format($v_content->price, 0, '', ',')}} VNĐ</span></td>
                                            <td class="quantity" width="200px">
                                             <form action="{{URL::to('/update-cart-quantity/'.$v_content->rowId)}}" method="POST">  
                                             {{csrf_field()}} 
                                                <div class="cart-plus-minus" style="float:left;margin-left: 30px;">
                                                    <input class="cart-plus-minus-box" name="cart_quantity" value="{{$v_content->qty}}" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                                <div class="right-button">
                                                    <input type="hidden" name="rowId_Cart" value="{{$v_content->rowId}}">
                                                    <button style="color:black;" type="submit" class="btn btn-link black" data-toggle="collapse"><i class="fa fa-refresh"></i></button>
                                                </div>
                                                </form>

                                            </td>
                                            <td class="product-subtotal"><span class="amount">{{number_format($v_content->price * $v_content->qty, 0, '', ',')}} VNĐ</span></td> 
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
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
                                         
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
       @include('frontend.footer')