<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandController extends Controller
{
	 public function AuthLogin(){
        // ham check login
       $admin_id = Session::get('admin_id');
       if($admin_id){
            return Redirect::to('dashboard');
       } 
        else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_brand (){
    	$this->AuthLogin();
    	return view('backend.brand.add_brand');
    }
    public function save_brand(Request $rq){
    	$this->AuthLogin();
    	$data = array();
    	$data['brand_name'] = $rq->brand_name;
    	$data['brand_desc'] = $rq->brand_desc;
    	$data['brand_slug'] = $rq->brand_slug;
    	$data['brand_status'] = $rq->brand_status;
    	DB::table('tbl_brand')->insert($data); //insert mảng data vào bảng brand
    	Session::put('message','Thêm thương hiệu sản phẩm thành công');
    	 return Redirect::to('add-brand');
    }
    public function all_brand(Request $rq){
	   	$this->AuthLogin();
	   	$all_brand = DB::table('tbl_brand')->get();
	   	return view('backend.brand.all_brand',compact('all_brand'));
    }
    public function edit_brand($brand_id){
    	$this->AuthLogin();
    	$edit_brand = DB::table('tbl_brand')->where('brand_id',$brand_id)->get();
    	return view('backend.brand.edit_brand',compact('edit_brand'));
    }
    public function update_brand(Request $rq,$brand_id){
    	$this->AuthLogin();
    	$data = array();
    	$data['brand_name'] = $rq->brand_name;
    	$data['brand_desc'] = $rq->brand_desc;
    	$data['brand_slug'] = $rq->brand_slug;
    	$data['brand_status'] = $rq->brand_status;
    	DB::table('tbl_brand')->where('brand_id',$brand_id)->update($data); //update mảng data vào bảng brand
    	Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
    	return Redirect::to('edit-brand/'.$brand_id)->with('message','Cập nhật thương hiệu thành công');
    }
    public function delete_brand($brand_id){
    	$this->AuthLogin();
    	DB::table('tbl_brand')->where('brand_id',$brand_id)->delete();
    	Session::put('message','Xóa thương hiệu sản phẩm thành công');
     	return Redirect::to('all-brand');
    }

}
