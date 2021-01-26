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
                                    <h4 class="mt-0 header-title text-center">Cập Nhật Thương Hiệu Sản Phẩm</h4>
                                    @foreach($edit_brand as $key =>$edit_brand)  
                                     <form role="form" action="{{URL::to('/update-brand/'.$edit_brand->brand_id)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Tên Thương Hiệu</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$edit_brand->brand_name}}" name="brand_name" type="text"  id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Mô tả</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$edit_brand->brand_desc}}" name="brand_desc" type="text"  id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$edit_brand->brand_slug}}"  name="brand_slug" type="text"  id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hiển Thị</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="brand_status">
                                                <option value="0" {{$edit_brand->brand_status==0 ? 'selected' : ''}}>Ẩn</option>
                                                <option value="1" {{$edit_brand->brand_status==1 ? 'selected' : ''}}>Hiện</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật thương hiệu</button>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
@endsection
