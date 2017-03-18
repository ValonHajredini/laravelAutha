<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\DB;
use Image;
class GalleryController extends Controller
{

    public function createGallery(Request $request){
        if ($request->hasFile('avatar')){
                $avatar = $request->file('avatar');
                $filename = time().'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->orientate()->save(public_path('/upload/thumbnails/'.$filename));
                Image::make($avatar)->orientate()->save(public_path('/upload/original/'.$filename));
            DB::table('galleries')->insert([
                'photoName' => $request->imgTitle,
                'url' => $filename,
                'thumbnailUrl' => $filename,
            ]);
        }
        return back();
    }
    public function delete(Request $request){

        $id = $request->id;
        $gallery  = Gallery::find($id);
        $gallery->delete();
        return back();
    }


}
