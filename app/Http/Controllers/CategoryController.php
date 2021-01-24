<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
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
    public function add_category(){
    	$this->AuthLogin();
    	return view('backend.category.add_category');
    }

       public function save_category(Request $rq){
        $this->AuthLogin();
    	$data = array(); // khai bao 1 cai mang de chua du lieu tra ve
        $data['category_name']   =  $rq->category_name;
        $data['category_desc']   =  $rq->category_desc;
        $data['category_status'] =  $rq->category_status;
        $data['slug_category_product'] =  $rq->category_slug;
        $data['meta_keywords'] =  $rq->category_keyword;
        DB::table('tbl_category_product')->insert($data);//insert mang data vao db
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('backend.category.add_category');
    }
    public function all_category(Request $rq){
    	$this->AuthLogin();
    	$all_category = DB::table('tbl_category_product')->get();
    	$manage_category = view('backend.category.all_category')->with('all_category',$all_category);
    	return view('back-share')->with('backend.category.all_category',$manage_category);
    }


    public function edit_category($category_product_id){
    $this->AuthLogin();
	$edit_category = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();//first la lay 1 san pham thoi.
    $manage_category = view('backend.category.edit_category')->with('edit_category',$edit_category);
    return view('back-share')->with('backend.category.edit_category',$manage_category);
    }
    public function update_category(Request $rq,$category_product_id ){
    $this->AuthLogin();
     $data = array();
     $data['category_name']= $rq->category_product_name;
     $data['category_desc'] = $rq->category_product_desc;
     DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);// update mang data vào db
     Session::put('message','Cập nhật danh mục sản phẩm thành công');
     return Redirect::to('all-category-product');
    }

}
