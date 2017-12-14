<?php

use Illuminate\Database\Seeder;
use App\Sensor;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        // $this->call(UsersTableSeeder::class);
    	/*
			["A001F43","A001F20","A001F93","A001F68","A001F70","A001G00"]
    	*/
    	$sensor=new Sensor();
    	$sensor->id="A001F43";
    	$sensor->latitud="123.123";
    	$sensor->longitud="123.123";
    	$sensor->save();

    	$sensor=new Sensor();
    	$sensor->id="A001F20";
    	$sensor->latitud="123.123";
    	$sensor->longitud="123.123";
    	$sensor->save();

    	$sensor=new Sensor();
    	$sensor->id="A001F93";
    	$sensor->latitud="123.123";
    	$sensor->longitud="123.123";
    	$sensor->save();

    	$sensor=new Sensor();
    	$sensor->id="A001F68";
    	$sensor->latitud="123.123";
    	$sensor->longitud="123.123";
    	$sensor->save();

    	$sensor=new Sensor();
    	$sensor->id="A001G00";
    	$sensor->latitud="123.123";
    	$sensor->longitud="123.123";
    	$sensor->save();
    }
}
