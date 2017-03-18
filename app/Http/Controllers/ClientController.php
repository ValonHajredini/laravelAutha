<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Gallery;
//use Illuminate\Support\Facades\DB;
use Flashy;
use DB;

class ClientController extends Controller
{

    public function index()
    {

        return view('client.index');
    }
    public function gallery(){
//        $gallery = Gallery::all();
        $gallery = DB::table('galleries')->orderBy('id', 'asc')->paginate(20);
        return view('client.gallery', compact('gallery', $gallery));
    }
    public function aboutUs(){
        return view('client.aboutUs');
    }
    public function services(){
        return view('client.services');
    }
    public function customerfeedback(){
        return view('client.customerfeedback');
    }
    public function contact(){
        return view('client.Contact');
    }




}
