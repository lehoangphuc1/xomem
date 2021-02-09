<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{


     public function save_cart(Request $rq){
    	$product_idd = $rq->productid_hidden;
    	$quantity = $rq->qty;
    	$product_info = DB::table('tbl_product')->where('product_id',$product_idd)->first();
    	/*$data = DB::table('tbl_product')->where('product_id',$productId)->get();*/


      	//Cart::add('293ad', 'Product 1', 1, 9.99, 550); in ra thu xem co bao nhieu truong, neu thieu se bi loi~
      	$data['id'] = $product_info->product_id;
      	$data['qty'] = $quantity;
      	$data['name'] = $product_info->product_name;
      	$data['price'] = $product_info->product_price;
      	$data['options']['image'] = $product_info->product_image;
      	Cart::add($data);
        //Cart::destroy();
      	return Redirect::to('/show-cart');
	}
    public function show_cart(){
    	return view('frontend.product.cart');
    }

  /*  public function update_cart_quantity(Request $rq, $rowId){
      $rowId = $rq->rowId_Cart;
      $qty = $rq->cart_quantity;
      Cart::update($rowId, $qty);
      return Redirect::to('/check-cart-ajax');
    }
*/
    public function update_cart(Request $rq){
      if($rq->ajax()){
        $id = $rq->get('id');
        $qty = $rq->get('qty');
        Cart::update($id,$qty);
      }
    }

    public function add_cart_ajax(Request $rq,$id){
        $product = DB::table('tbl_product')->where('product_id',$id)->first();
        $data = array();
        $data['id'] = $product->product_id;
        $data['qty'] = 1;
        $data['name'] = $product->product_name;
        $data['price'] = $product->product_price;
        $data['options']['image'] = $product->product_image;
        Cart::add($data);
        return \Response::json(['success' => 'Successfully add on your Cart']);
    }
   public function check_cart_ajax(Request $rq){
      $content = Cart::content();
      return view('frontend.product.cart',compact('content'));
    }
    public function delete_cart($rowId){
      Cart::update($rowId,0); //update rowID với giá trị = 0 tương đương xóa
    }

    public function check_coupon(Request $rq){
      $data = $rq->all();
    }
}
