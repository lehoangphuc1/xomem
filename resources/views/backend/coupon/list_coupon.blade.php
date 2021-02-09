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

                                    <h4 class="mt-0 header-title text-center">Danh Sách Danh Mục Sản Phẩm</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>Tên mã giảm giá</th>
                                                    <th>Mã giảm giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Điều kiện</th>
                                                    <th>Số giảm giá</th>
                                                    <th>Action</th>
                                                    <th>
                                                       <a href="" class="active styling-edit btn btn-primary" ui-toggle-class="">Thêm</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($coupon as $key =>$cou)
                                                <tr>
                                                    <td>{{$cou->coupon_name}}</td>
                                                    <td>{{$cou->coupon_code}}  </td>
                                                    <td>{{$cou->coupon_time}} </td>
                                                    <td>
                                                        <?php
                                                        if($cou->coupon_condition==1){
                                                           ?>
                                                           Giảm theo phần trăm 
                                                        <?php
                                                        }else{
                                                         ?>
                                                          Giảm theo tiền mặt  
                                                        <?php 
                                                        }

                                                        ?>


                                                      </td>
                                                    <td>{{$cou->coupon_number}}</td>
                                                    <td>
              <a href="" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục không?')" class="active styling-edit btn btn-danger" ui-toggle-class="">Xóa</a>
                                                    </td>
                                                     <td></td>       
                                                </tr>
                                                @endforeach
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