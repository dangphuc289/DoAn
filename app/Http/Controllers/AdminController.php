<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admins_id = Session::get('admin_id');
        if($admins_id)
            return Redirect::to('dashboard');
        else
            return Redirect::to('admin')->send();
    }
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this-> AuthLogin(); 
        $count_user = DB::table('tbl_user')->select(DB::raw('count(*) as user_count'))->value('user_count');
        $count_pr = DB::table('tbl_product')->select(DB::raw('count(*) as product_count'))->value('product_count');
        $count = DB::table('tbl_order')->select(DB::raw('count(*) as order_count'))->value('order_count');
        return view('admin.dashboard')->with('count_user',$count_user)->with('count_pr',$count_pr)->with('count',$count);
    }
    public function dashboard(Request $request){
        $admin_email = $request -> admin_email;
        $admin_password = md5($request -> admin_password);

        $result = DB::table ('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return redirect::to('/dashboard');
        }
        else{
            Session::put('message','Mật khẩu hặc tài khoản bị sai.Nhập lại');
            return redirect::to('/admin');
        }
    }
    public function logout(){
        $this-> AuthLogin(); 
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return redirect::to('/admin');
    }
}
