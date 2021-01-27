<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    //
    public function index(Request $rq){

      //seo 
     /* $meta_desc ="Chuyên bán quần áo second hand xuyên quốc gia";
      $meta_keywords = "Hàng vintage, second hand, đầm thu đông";
      $meta_title = "Xóm Em Shop";
      $url_page = $rq->url();*/
      //end seo
      

    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
      $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
    	$newest_product = DB::table('tbl_product')->where('product_status','1')
    	->orderby('product_id','desc')->get(); //san pham moi nhat lay ra 4
    	return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('newest',$newest_product);/*->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_page',$url_page);*/
      /*return view('pages.home')->with(compact('cate_product','brand_product','newest_product')); cách 2 bớt độ dài của with*/

    }
    public function search(Request $rq){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
      	$brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
      	$keyword = $rq->keyword_submit;
      	$search_product = DB::table('tbl_product')->where('product_name','like','%'.$keyword. '%')->get(); //ham so sanh like

      	return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);
    }
    public function send_mail(){
      $to_name = "hoangphuc.tv";
      $to_email ="lehoangphucdtu@gmail.com"; 
      $data =array("name" =>"mail từ tài khoản khách hàng","body" =>"Mail gửi về vấn đề hàng hóa");
      Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){
          $message->to($to_email)->subject("test thử gửi mail google");//send this mail with subject : tiêu đề mail
          $message->from($to_email,$to_name);//send from this mail
      });
      return Redirect('')->with('message','');
    }
}
