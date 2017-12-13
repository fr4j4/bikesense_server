<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;
use Input;
class LectureController extends Controller{
    
	public function index(){
		$count=Lecture::count();
		$lectures=Lecture::orderBy('created_at','desc')->paginate(10);
		return view('index',compact('lectures','count'));
	}

    public function push_lecture(Request $req){
    	//return $duration;
    	$l=new Lecture();
        $l->client_id=$req->get('client_id');
    	$l->save();

        return "done";
    }
}
