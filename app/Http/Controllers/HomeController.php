<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderBy('brand_id','desc')->get();
        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        // ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        // ->orderby('tbl_product.product_id','desc')
        // ->get();
        $all_product = DB::table('tbl_product')->where('product_status','1')->orderBy('product_id','desc')->paginate(6);

        
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }

    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        $price = (int) $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderBy('brand_id')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->orWhereBetween('product_price', [$price - 50000, $price + 50000])->get();

        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);
    }

    public function blog()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderBy('brand_id')->get();
        return view('pages.blog')->with('category',$cate_product)->with('brand',$brand_product);
    }
}
