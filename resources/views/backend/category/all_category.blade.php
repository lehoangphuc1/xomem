@extends('back-share')
@section('content')         
                         <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title text-center">Danh Sách Danh Mục Sản Phẩm</h4>
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr>
                                                    <th>Tên Danh Mục</th>
                                                    <th>Trạng Thái</th>
                                                    <th>Slug</th>
                                                    <th>Meta Keywords</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($all_category as $key =>$cate)
                                                <tr>
                                                    <td>{{$cate->category_name}}</td>
                                                    <td>  <?php  
                                                            if($cate->category_status==0){
                                                                echo "Ẩn";
                                                            }else{
                                                                echo "Hiện";
                                                            }
                                                            ?></td>
                                                    <td>{{$cate->slug_category_product}}</td>
                                                    <td>{{$cate->meta_keywords}}</td>
                                                    <td>
                                                         <a href="{{URL::to('/edit-category/'.$cate->category_id)}}" class="active styling-edit btn btn-primary" ui-toggle-class="">Sửa</a>
              <a href="{{URL::to('/delete-category/'.$cate->category_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục không?')" class="active styling-edit btn btn-danger" ui-toggle-class="">Xóa</a>
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