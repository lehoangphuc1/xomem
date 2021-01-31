@extends('back-share')
@section('content')
<div class="container">
                    <div class="page-title-box">
                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Zegva</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->

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
                                    <h4 class="mt-0 header-title text-center">Thêm Sản Phẩm</h4>
                                     <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="product_name" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Mô tả</label>
                                        <div class="col-sm-10">
                                        <textarea id="elm1" name="product_desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                         <input class="form-control" name="product_slug" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Nội dung sản phẩm</label>
                                        <div class="col-sm-10">
                                        <textarea id="elm1" name="product_content"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="product_price" type="text" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Hình ảnh sản phẩm</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="product_image" type="file" onchange="previewFile(this);" >
                                           <img id="previewImg" style="display:none;" src="public/uploads/product/20210127064314.jpg" width="438" height="438" >
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Sản phẩm đặc biệt</label>
                                        <div class="col-sm-10">
                                                <!-- Default radio -->
                                                <div class="form-check">
                                                  <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="show_option"
                                                    id="flexRadioDefault1"
                                                    value="0"
                                                  />
                                                  <label class="form-check-label" for="flexRadioDefault1"> No </label>
                                                </div>

                                                <!-- Default checked radio -->
                                                <div class="form-check">
                                                  <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="show_option"
                                                    id="flexRadioDefault2"
                                                    checked
                                                     value="1"
                                                  />
                                                  <label class="form-check-label" for="flexRadioDefault2"> Yes </label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Danh mục sản phẩm</label>
                                        <div class="col-sm-10">
                                            <select class="form-control"  name="category_id" >
                                                @foreach($category as $value)
                                                 <option value="{{$value->category_id}}">{{$value->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thương hiệu sản phẩm</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="brand_id">
                                                @foreach($brand as $value)
                                                <option value="{{$value->brand_id}}">{{$value->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hiển Thị</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="product_status">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm sản phẩm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <script type="text/javascript">
                
              </script>
                <script>

                     function previewFile(input){
                        var file = $("input[name='product_image']").get(0).files[0];
                        if(file){
                            var reader = new FileReader();
                            reader.onload = function(){
                                $('#previewImg').show();
                                $("#previewImg").attr("src", reader.result);
                            }
                            reader.readAsDataURL(file);
                        }
                    }
                </script>
@endsection
