<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Feetback;
use Flashy;
class FeetbackController extends Controller
{
    public function ratting(){
        $allStars = array(
            's1'    => $this-> ratingPercentage(1),
            's2'    => $this-> ratingPercentage(2),
            's3'    => $this-> ratingPercentage(3),
            's4'    => $this-> ratingPercentage(4),
            's5'    => $this-> ratingPercentage(5),
            'p1'    => $this-> people(1),
            'p2'    => $this-> people(2),
            'p3'    => $this-> people(3),
            'p4'    => $this-> people(4),
            'p5'    => $this-> people(5),

            'total' => $this->total_percent_rating()
        );
        $messages = Feetback::all();
        return view('client.customerfeedback',['star' =>$allStars, 'messages' => $messages]);
    }
    public function create(Request $request){
        $name       = $request->name;
        $comment    = $request->comment;
        $rating     = $request->rating;
       $feetback = Feetback::create([
            'name' => $name,
            'comment' => $comment,
            'ratting' => $rating,
        ]);
        if (!$feetback) {
            flashy()->error('Feetback wos not sent.', '#');
        }else {
            flashy()->success('You sended succesfully feertback.', '#');
        }
        return back();

    }
    private function ratingPercentage($stars){
        $xstarCount = Feetback::where(['ratting' => $stars])->get()->count();
        $allRattings = Feetback::count();
        $percentage = ($xstarCount * 100 )/($allRattings);
        return round($percentage,3);
    }
    private function categoryOnStar($star){
            $rez = $xstarCount = Feetback::where(['ratting' => $star])->get()->count();
        if(!$rez >= 1){
            $rez = 0;
        }
        return round($rez,2);
    }
    private function total_percent_rating(){
        $allRattings = Feetback::count();
        if(!$allRattings == 0){
            $result = (($this->categoryOnStar(5)*5) + ($this->categoryOnStar(4)*4) + ($this->categoryOnStar(3)*3) + ($this->categoryOnStar(2)*2) + ($this->ratingPercentage(1)*1)) / ($allRattings);
//            $result = $result / 100;
        } else {
            $result = 0;
        }
        return round($result,1);
    }
    private function people($categoryStar){
    return $rez = $xstarCount = Feetback::where(['ratting' => $categoryStar])->get()->count();
}
}
