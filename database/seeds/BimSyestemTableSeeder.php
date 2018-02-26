<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BimSyestemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('bim_systems')->delete();
    	DB::update("ALTER TABLE bim_systems AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('bim_systems')->insert(
    		array(
    			array(
                    'name'=>'Architectural',  
                    'code'=>'ARC',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
    			array(
    				'name'=>'Structural',  
                    'code'=>'STR',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Electrical',  
                    'code'=>'ELE',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Mechanical ventilation Heating and Cooling',  
                    'code'=>'MHV',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Fire Suppression ',  
                    'code'=>'FRS',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Plumbing and Drainage Systems',  
                    'code'=>'PDS',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Infrastructure',  
                    'code'=>'INF',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Landscaping',  
                    'code'=>'LSC',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Civil and Roads',  
                    'code'=>'CIV',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Telecommunication',  
                    'code'=>'TEL',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Fire and Life Safety',  
                    'code'=>'FLS',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Multidisciplinary ',  
                    'code'=>'MLD',
                    'parent_id'=>NULL,
                    'description'=>'description',  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                

			)
		);
    }
}
