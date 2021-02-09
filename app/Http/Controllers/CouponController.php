<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use App\Coupon;
use Session;// su dung session
use App\Http\Requests;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();
class CouponController extends Controller
{
    public function add_coupon(){
    	return view('backend.coupon.add_coupon');
    }
    public function save_coupon(Request $rq){
    	$data = $rq->all();
    	$coupon = new Coupon;
    	$coupon->coupon_name = $data['coupon_name'];
    	$coupon->coupon_number = $data['coupon_number'];
    	$coupon->coupon_code = $data['coupon_code'];
    	$coupon->coupon_time = $data['coupon_qty'];
    	$coupon->coupon_condition = $data['coupon_condition'];
    	$coupon ->save();
    	Session::put('message','Thêm mã giảm giá thành công');
    	return Redirect::to('/add-coupon');
    }
    public function list_coupon(){
    	$coupon = Coupon::orderby('coupon_id','DESC')->get();
    	return view('backend.coupon.list_coupon',compact('coupon'));
    }
}
