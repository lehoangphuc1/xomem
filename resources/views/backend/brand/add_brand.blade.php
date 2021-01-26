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
                                    <h4 class="mt-0 header-title text-center">Thêm Thương Hiệu Sản Phẩm</h4>
                                     <form role="form" action="{{URL::to('/save-brand')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Tên Thương Hiệu</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="brand_name" type="text"  id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Mô tả</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="brand_desc" type="search"  id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="brand_slug" type="search"  id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hiển Thị</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="brand_status">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm thương hiệu</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
@endsection
