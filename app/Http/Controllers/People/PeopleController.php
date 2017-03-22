<?php

namespace App\Http\Controllers\People;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\People;
use DB;
class PeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function Dashboard(){
        $user = Auth::user();
        $peoples = DB::table('peoples')->orderBy('Mbiemri')->paginate(52);
//        return view::make('People.index', compact('peoples', $peoples));
        return view('People.index',['peoples' => $peoples, 'user' => $user]);

    }
    public function showPErson(Request $request){
//        $person = People::find($request['id']);
        $person = DB::table('peoples')->find($request->id);
        return view('People.showPerson', compact('person', $person));
//            return ;
    }
}
