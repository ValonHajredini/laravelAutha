<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use DB;
use Flashy;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Flashy::message('Welcome Aboard!', 'http://your-awesome-link.com');
        return view('admin.index');
    }
    public function gallery(){
        $gallery = DB::table('galleries')->orderBy('id', 'desc')->paginate(20);
        return view('admin.gallery', compact('gallery', $gallery));
    }
    public function home(){
        return view('admin.home');
    }
    public function contact(){
        return view('admin.contact');
    }
    public function customerFeetback(){
        return view('admin.customerFeetback');
    }
    public function services(){
        return view('admin.services');
    }
    public function aboutUs(){
        return view('admin.aboutUs');
    }
    public function  createGallery(Request $r){
        echo "<pre>";
        print_r($r->all());
        echo "</pre>";
    }


}
