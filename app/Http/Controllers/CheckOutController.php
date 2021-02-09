<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckOutController extends Controller
{
    public function login_checkout(Request $rq){
    	return view('frontend.product.checkout.login_checkout');
    }
    public function add_customer(Request $rq){
    	$data = array();
    	$data['customer_name'] = $rq->username;
    	$data['customer_email'] =  $rq->email_register;
    	$data['customer_password'] =  md5($rq->password_register);
    	$data['customer_phone'] =  $rq->phone;

    	$customer_id = DB::table('tbl_customers')->insertGetId($data); //hàm chèn

    	Session::put('customer_id',$customer_id); //lấy session cho customer theo id 
    	Session::put('customer_name',$rq->username); //lấy session cho customer theo name 
    	return Redirect::to('/checkout');//check xong quay về trang thanh toán
    }
    public function checkout(){
    	 return view('frontend.product.checkout.checkout');
    }

    public function save_checkout(Request $rq){
    	$data = array();
    	$data['shipping_name'] = $rq->shipping_name;
    	$data['shipping_email'] =  $rq->shipping_email;
    	$data['shipping_phone'] =  $rq->shipping_phone;
    	$data['shipping_address'] =  $rq->shipping_address;
    	$data['shipping_notes'] =  $rq->shipping_notes;

    	$shipping_id = DB::table('tbl_shipping')->insertGetId($data);

    	Session::put('shipping_id',$shipping_id); //lấy session cho customer theo id 

    	return Redirect::to('/payment');
    }
    public function logout_checkout(){
    	Session::flush();
    	return Redirect::to('/login-checkout');
    }
    public function login_customer(Request $rq){
    	$email = $rq->email;
    	$password = md5($rq->password);
    	$result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
    	
    	if($result){
    		Session::put('customer_id',$result->customer_id);
    		return Redirect::to('/checkout');
    	}else{
    		return Redirect::to('/login-checkout');
    	}
    	
    }
    public function payment(){
	return view('frontend.product.checkout.payment');
    }
    public function order_place(Request $rq){
    	$data = array();
    	$data['payment_method'] = $rq->payment_option;//get payment method
    	$data['payment_status'] = "Đang chờ xử lý";
    	$payment_id = DB::table('tbl_payment')->insertGetId($data); //insertGetId co nghia insert xong getID

    	//insert to order
    	$order_data = array(); //lay dua vao bang tbl_order
    	$order_data['customer_id'] = Session::get('customer_id');
    	$order_data['shipping_id'] = Session::get('shipping_id');
    	$order_data['payment_id'] = $payment_id ;
    	$order_data['order_total'] = Cart::total() ;
    	$order_data['order_status'] = "Đang chờ xử lý";
    	$order_id = DB::table('tbl_order')->insertGetId($order_data);

    	//insert to order_details
    	$content = Cart::content();
    	foreach($content as $v_content) {  //foreach content của product để lấy ra product_id , print_r content ra xem co cac trường nào trong mảng rồi so sánh
    	$order_detail_data = array(); 
    	$order_detail_data['order_id'] = $order_id; 
    	$order_detail_data['product_id'] = $v_content->id; 
    	$order_detail_data['product_name'] = $v_content->name; 
    	$order_detail_data['product_price'] = $v_content->price; 
    	$order_detail_data['product_sales_quantity'] = $v_content->qty; 
    	$result = DB::table('tbl_order_details')->insert($order_detail_data); //ko can get id nữa nên dùng insert thôi
       }
       if($data['payment_method']==1){
       	echo "Payment by ATM";
       }
       elseif($data['payment_method']==2){
       		return view('frontend.product.checkout.handcash');
       }
       else{
       	 echo "Payment by Debit card";
       }
    }
 public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function order_manage(Request $rq){
    	$this->AuthLogin();
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->select('tbl_order.*','tbl_customers.customer_name')
        ->orderby('tbl_order.order_id','desc')->get();
    	return view('backend.order.manage_order',compact('all_order')); 
    }
    public function view_order($orderId){
    	$this->AuthLogin();
        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_order.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*','tbl_order_details.*')  //chon tat ca la .*
        ->orderby('tbl_order.order_id','desc')->first();
    	return view('backend.order.view_order',compact('order_by_id'));
    }
}
