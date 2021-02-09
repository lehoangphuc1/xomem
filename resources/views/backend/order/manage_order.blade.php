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

                                    <h4 class="mt-0 header-title text-center">Liệt Kê Đơn Hàng</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>Tên người đặt</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Tình trạng</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($all_order as $key =>$order)
                                                <tr>
                                                    <td>{{$order->customer_name}}</td>
                                                    <td>{{$order->order_total}}</td>
                                                    <td>{{$order->order_status}}</td>
                                                    <td>
                                                         <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="active styling-edit btn btn-warning" ui-toggle-class="">Sửa</a>
              <a href="{{URL::to('/delete-order/'.$order->order_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng không?')" class="active styling-edit btn btn-danger" ui-toggle-class="">Xóa</a>
                                                    </td>      
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