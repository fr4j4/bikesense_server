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

    public function push_lecture($duration=null){
    	//return $duration;
    	$l=new Lecture();
    	$l->duration=$duration!=null?$duration:null;
    	$l->save();
    	return "done";
    }
}
