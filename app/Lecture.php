<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model{
	
	protected $guarded=['id'];

	public function sensor(){
		return $this->belongsTo('App\Sensor','sensor_id','id');
	}    
}
