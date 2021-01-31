<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //su dung db
use Session;// su dung session
use App\Http\Requests;
use Mail;
use Random;
use Illuminate\Support\Facades\Redirect;
session_start();


class HomeController extends Controller
{
     public function index(){
    	$category_special = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->take(4)->get();
    	$category = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','asc')->take(4)->get();
    	$brand = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
    	/*$product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();*/
    	$newest_product = DB::table('tbl_product')->where('product_status','1')
    	->orderby('product_id','desc')
                ->limit(20)
                ->get()->random(10); //san pham moi nhat lay ra 4
    	/*dd($newest_product);
    	die();*/

    	$product = DB::table('tbl_product')                                              
           ->join('tbl_category_product', 'tbl_category_product.category_id', '=','tbl_product.category_id') 
           ->where('product_status','1')                                              
           ->get();//show product by category



       /* $product_num = DB::table('tbl_product')                                              
           ->join('tbl_category_product', 'tbl_category_product.category_id', '=','tbl_product.category_id') 
           ->where('product_status','1')->orderby('product_id','desc')->take(4) ->get();   */                                       
           
        
      return view('frontend.homepage',compact('category','brand','product','newest_product','category_special'));
    }

      public function search(Request $rq){
      	$keyword = $rq->keyword_input;
      	$search_product = DB::table('tbl_product')->where('product_name','like','%'.$keyword. '%')->get(); //ham so sanh like
      	$brand = DB::table('tbl_brand')->get();
      	$category_all = DB::table('tbl_category_product')->get();
      return view('frontend.product.search')->with('category_all',$category_all)->with('brand',$brand)->with('search_product',$search_product);
    }
}


