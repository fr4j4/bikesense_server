<?php

use Illuminate\Database\Seeder;

use App\Lecture;
use App\Sensor;

class MedicionesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	$faker = Faker\Factory::create();
        /*
        $lectores_id=["A001F43","A001F20","A001F93","A001F68","A001F70","A001G00"];

    	for ($i=0; $i <1000; $i++) { 
    		$lecture=new Lecture();
    		$lecture->client_id=$lectores_id[array_rand($lectores_id)];
    		$lecture->created_at=$faker->dateTimeBetween($startDate = '-10 months', $endDate = 'now');
    		$lecture->save();
    		
    	}
        */
        $lectores=[];
        foreach (Sensor::all() as $sensor) {
            array_push($lectores, $sensor);
        }
        for ($i=0; $i < 10; $i++) { 
            $lecture=new Lecture();
            $lecture->created_at=$faker->dateTimeBetween($startDate = '-10 months', $endDate = 'now');
            //$lecture->save();
            $sensor=$lectores[array_rand($lectores)];
            $sensor->lecturas()->save($lecture);
        }

    }
}
