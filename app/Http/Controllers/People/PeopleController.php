<?php

namespace App\Http\Controllers\People;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\People;
use DB;
class PeopleController extends Controller
{
    public function Dashboard(){
        $peoples = DB::table('peoples')->orderBy('Mbiemri')->paginate(50);
        return view('People.index', compact('peoples', $peoples));

    }
    public function showPErson(Request $request){
//        $person = People::find($request['id']);
        $person = DB::table('peoples')->find($request->id);
        return view('People.showPerson', compact('person', $person));
//            return ;
    }
}
