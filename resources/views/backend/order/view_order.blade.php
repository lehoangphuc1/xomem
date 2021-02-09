@extends('back-share')
@section('content')    

                           <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <?php 
                                        $message = Session::get('message');
                                        if($message){
                                            echo '<div class="text-center" style="margin-bottom: 20px;"><span class="alert alert-success">'.$message.'</span></div>';
                                            Session::put('message',null);//chi hien thi 1 lan
                                        }    
                                         ?>  

                                    <h4 class="mt-0 header-title text-center">Thông tin khách hàng</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>Tên khách hàng</th>
                                                    <th>Email</th>
                                                    <th>Số điện thoại</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <tr>
                                                    <td>{{$order_by_id->customer_name}}</td>
                                                    <td>{{$order_by_id->customer_email}}</td>   
                                                    <td>{{$order_by_id->customer_phone}}</td>  
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                    <br>
                           <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <?php 
                                        $message = Session::get('message');
                                        if($message){
                                            echo '<div class="text-center" style="margin-bottom: 20px;"><span class="alert alert-success">'.$message.'</span></div>';
                                            Session::put('message',null);//chi hien thi 1 lan
                                        }    
                                         ?>  

                                    <h4 class="mt-0 header-title text-center">Thông tin vận chuyển</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>Tên người vận chuyển</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Số điện thoại</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <tr>
                                                    <td>{{$order_by_id->shipping_name}}</td>
                                                    <td>{{$order_by_id->shipping_address}}</td>
                                                    <td>{{$order_by_id->shipping_phone}}</td>
                                                  
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->
                    <br>


                         <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <?php 
                                        $message = Session::get('message');
                                        if($message){
                                            echo '<div class="text-center" style="margin-bottom: 20px;"><span class="alert alert-success">'.$message.'</span></div>';
                                            Session::put('message',null);//chi hien thi 1 lan
                                        }    
                                         ?>  

                                    <h4 class="mt-0 header-title text-center">Chi tiết đơn hàng</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th>Tổng tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <tr>
                                                    <td>{{$order_by_id->product_name}}</td>
                                                    <td>{{$order_by_id->product_sales_quantity}}</td>
                                                    <td>{{$order_by_id->product_price}} VNĐ</td>
                                                    <td>{{$order_by_id->order_total}} VNĐ</td>      
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->
@endsection