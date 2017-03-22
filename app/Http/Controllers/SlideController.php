<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use DB;
use Image;
class SlideController extends Controller
{
    public function createSlide(Request $request){
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(1080,620)->orientate()->save(public_path('/upload/slide/thumbnails/'.$filename));
            Image::make($avatar)->orientate()->save(public_path('/upload/slide/original/'.$filename));
            DB::table('slides')->insert([
                'photoName' => $request->imgTitle,
                'url' => $filename,
                'thumbnailUrl' => $filename,
            ]);
        }
        return back();
    }
    public function delete(Request $request){
        $slide = Slide::find($request->id);
        $slide->delete();
        return back();
    }
}
