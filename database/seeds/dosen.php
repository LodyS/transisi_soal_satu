<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class dosen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('dosen')->insert([
    			'nama_dosen' => $faker->name,
    			'email' => $faker->email,
    		
    		]);
 
    	}
    }
}
//implementasi seeder