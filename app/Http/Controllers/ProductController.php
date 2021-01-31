<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
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
    public function add_product(){
      $this->AuthLogin();
      $brand = DB::table('tbl_brand')->get();
      $category = DB::table('tbl_category_product')->get();
      return view('backend.product.add_product',compact('brand','category'));  
    }
    public function save_product(Request $rq){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $rq->product_name;
        $data['product_desc'] = $rq->product_desc;
        $data['product_slug'] = $rq->product_slug;
        $data['product_content'] = $rq->product_content;
        $data['product_price'] = $rq->product_price;
        $data['product_status'] = $rq->product_status;
        $data['category_id'] = $rq->category_id;
        $data['brand_id'] = $rq->brand_id;

        if ($files = $rq->file('product_image')) {
        $destinationPath = 'public/uploads/product/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $data['product_image'] = "$profileImage";
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-product');
        }

        /*$get_image = $rq->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }*/
        $data['product_image'] = '';
      DB::table('tbl_product')->insert($data);
      Session::put('message','Thêm sản phẩm thành công');
      return Redirect::to('all-product');
    }
    public function all_product(){
      $all_product = DB::table('tbl_product')
      ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
      ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('product_id','asc')->get(); // join 2 bảng có category_id và brand_id chung để lấy ra 
     /* dd($all_product);
      die();*/
      return view('backend.product.all_product',compact('all_product'));
    }

    public function edit_product($product_id){
      $brand = DB::table('tbl_brand')->get();
      $category = DB::table('tbl_category_product')->get();
       $all_product = DB::table('tbl_product')->where('product_id',$product_id)
      ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
      ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->get();
      return view('backend.product.edit_product',compact('all_product','brand','category'));
    }
    public function update_product($product_id, Request $rq){
      //Xóa file hình thẻ cũ

      $this->AuthLogin();
        $data = array();
        $data['product_name'] = $rq->product_name;
        $data['product_desc'] = $rq->product_desc;
        $data['product_slug'] = $rq->product_slug;
        $data['product_content'] = $rq->product_content;
        $data['product_price'] = $rq->product_price;
        $data['product_status'] = $rq->product_status;
        $data['category_id'] = $rq->category_id;
        $data['brand_id'] = $rq->brand_id; 

        $getHT = DB::table('tbl_product')->select('product_image')->where('product_id',$product_id)->get();
        if($getHT[0]->product_image != '' && file_exists(public_path('uploads/product/'.$getHT[0]->product_image)))
        {
          unlink(public_path('uploads/product/'.$getHT[0]->product_image));
        }
        if ($files = $rq->file('product_image')) {
        $destinationPath = 'public/uploads/product/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $data['product_image'] = "$profileImage";
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('edit-product/'.$product_id);
      }
    $data['product_image'] = '';
    DB::table('tbl_product')->where('product_id',$product_id)->update($data); //update mảng data vào bảng brand
    Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
    return Redirect::to('edit-product/'.$product_id)->with('message','Cập nhật thương hiệu thành công');

    }
    public function delete_product($product_id, Request $rq){
      $this->AuthLogin();
      $getHT = DB::table('tbl_product')->select('product_image')->where('product_id',$product_id)->get();
      unlink(public_path('/uploads/product/'.$getHT[0]->product_image));
      DB::table('tbl_product')->where('product_id',$product_id)->delete();
      Session::put('message','Xóa sản phẩm thành công');
      return Redirect::to('all-product');
    }

     public function detail_product($product_slug){
      $detail_product = DB::table('tbl_product')
      ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
      ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
      ->where('tbl_product.product_slug',$product_slug)->get();
      $special_product = DB::table('tbl_product')->where('product_status','1')->where('isSpecial','1')->get();
       foreach($detail_product as $key => $value){   //lay ra category_id de tiep tuc lọc ra sản phẩm liên quan
            $category_id = $value->category_id;
        }
       $related_product = DB::table('tbl_product')
      ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
      ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
      ->where('tbl_category_product.category_id',$category_id)->get(); 
      return view('frontend.product.detail_product',compact('detail_product','related_product','special_product'));
    }

    public function category_product($category_id){
    $brand = DB::table('tbl_brand')->get();
    $category_all = DB::table('tbl_category_product')->get();
    $product = DB::table('tbl_product')                                              
           ->join('tbl_category_product', 'tbl_category_product.category_id', '=','tbl_product.category_id') 
           ->where('product_status','1')                                              
           ->get();//show product by category
    $category = DB::table('tbl_category_product')->where('category_status','1')
    ->where('tbl_category_product.category_id','=',$category_id)->
    orderby('category_id','asc')->get();
      foreach($category as $key => $value){   //lay ra category_id de tiep tuc lọc ra sản phẩm liên quan
            $category_id = $value->category_id;
        }
    $product_by_category = DB::table('tbl_product')
    ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    ->where('tbl_product.category_id','=',$category_id)->get();
    return view('frontend.product.product_by_category',compact('product_by_category','category','product','brand','category_all'));
    }
}
 