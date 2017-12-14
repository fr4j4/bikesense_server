<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;
use App\Sensor;
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
    	$sensor=Sensor::find($req->get('client_id'));
        /*
        if(!$sensor){
           $sensor=new Sensor();
            $sensor->id=$req->get('sensor_id');
            $sensor->latitud="123.123";
            $sensor->longitud="123.123";
            $sensor->save();
        }*/
        $sensor->lecturas()->save($l);

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
