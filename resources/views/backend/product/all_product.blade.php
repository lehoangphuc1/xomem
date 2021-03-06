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

                                    <h4 class="mt-0 header-title text-center">Danh Sách Các Sản Phẩm</h4>
                                    <div class="align-right button-add-top"><a href="{{URL::to('/add-product')}}" class="active styling-edit btn btn-primary" ui-toggle-class="">Thêm</a></div>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên Sản Phẩm</th>
                                                    <th>Giá</th>
                                                    <th>Hình Ảnh</th>
                                                    <th>Danh Mục</th>
                                                    <th>Thương Hiệu</th>
                                                    <th>Trạng Thái</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $stt=1; ?>
                                             @foreach($all_product as $key =>$pro)
                                                <tr><td> {{$stt++}}</td>
                                                    <td>{{$pro->product_name}}</td>
                                                    <td>{{$pro->product_price}}</td>
                                                     <td><img src="public/uploads/product/{{$pro->product_image}}" height="100" height="100"></td>
                                                     <td>{{$pro->category_name}}</td>
                                                     <td>{{$pro->brand_name}}</td>
                                                     <td>  <?php  
                                                            if($pro->product_status==0){
                                                                echo "Ẩn";
                                                            }else{
                                                                echo "Hiện";
                                                            }
                                                            ?></td>
                                                    <td>
                                                         <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit btn btn-warning" ui-toggle-class="">Sửa</a>
              <a href="{{URL::to('/delete-product/'.$pro->product_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục không?')" class="active styling-edit btn btn-danger" ui-toggle-class="">Xóa</a>
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