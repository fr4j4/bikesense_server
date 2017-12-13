<?php

use Illuminate\Database\Seeder;

use App\Lecture;

class MedicionesSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	$faker = Faker\Factory::create();
        

    	for ($i=0; $i <10000; $i++) { 
    		$lecture=new Lecture();
    		$lecture->client_id="A001F43";
    		$lecture->created_at=$faker->dateTimeBetween($startDate = '-10 months', $endDate = 'now');
    		$lecture->save();
    		
    	}
    }
}
