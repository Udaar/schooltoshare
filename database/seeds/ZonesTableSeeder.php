<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('zones')->delete();
    	DB::update("ALTER TABLE zones AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('zones')->insert(
    		array(
    			array(
    				'name'=>'Zone 1',  
    				'building_id'=>1,   
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
    			array(
    				'name'=>'Zone 2',  
                    'building_id'=>1,  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),

			)
		);
    }
}
