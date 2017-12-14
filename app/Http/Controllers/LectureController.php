<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;
use DB;
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
    	$l->client_id=$req->get('client_id');
    	$l->save();
    	return "done";
    }
    public function viewEstadisticas(){
        $t=Lecture::select(DB::raw('client_id'),DB::raw('COUNT(*) as med'),DB::raw('HOUR(created_at) as hour'))->groupBy('client_id')->groupBy(DB::raw('hour'))->orderBy('client_id','asc')->orderBy('hour','asc')->get();
        return view('stats',compact('t'));
    }
    public function datosPorHora(){
        $t=Lecture::select(DB::raw('client_id'),DB::raw('COUNT(*) as med'),DB::raw('HOUR(created_at) as hour'))->groupBy('client_id')->groupBy(DB::raw('hour'))->orderBy('client_id','asc')->orderBy('hour','asc')->get();
        return Response::json($t);
    }
}
