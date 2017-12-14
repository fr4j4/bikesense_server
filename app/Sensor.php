<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model{
    protected $guarded=[
    	
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function lecturas(){
    	return $this->hasMany('App\Lecture','sensor_id','id');
    }
}
