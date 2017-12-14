<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;
use DB;
use Input;
use Response;
class LectureController extends Controller{
    
	public function index(){
		$count=Lecture::count();
		$lectures=Lecture::orderBy('created_at','desc')->paginate(10);
		return view('index',compact('lectures','count'));
	}

    public function push_lecture(Request $req){
    	//return $duration;
    	$l=new Lecture();
    	$l->sensor_id=$req->get('sensor_id');

    	$l->save();

        return "done";
    }
    
    public function viewEstadisticas(){
        $cuenta_dias=DB::table('lectures')->select(DB::raw('count(*) as med,weekday(created_at) as day'))->groupBy('day')->get();
        return view('stats',compact('cuenta_dias'));
    }


    public function datosPorDia(){
        $t=Lecture::select(DB::raw('sensor_id, count(*) as med, weekday(created_at) as day'))->groupBy('day')->groupBy('sensor_id')->orderBy('sensor_id')->orderBy('day')->get();
        
        return Response::json($t);
    }

    public function datosPorHora(){
        $t=Lecture::select(DB::raw('sensor_id'),DB::raw('COUNT(*) as med'),DB::raw('HOUR(created_at) as hour'))->groupBy('sensor_id')->groupBy(DB::raw('hour'))->orderBy('sensor_id','asc')->orderBy('hour','asc')->get();
        return Response::json($t);
    }
}
