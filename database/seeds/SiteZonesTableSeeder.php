<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiteZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('site_zones')->delete();
    	DB::update("ALTER TABLE site_zones AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('site_zones')->insert(
    		array(
                array(
                    'name'=>'site zone 1',
                    'category_id'=>2,  
                    'site_id'=>1, 
                    'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
    			array(
    				'name'=>'site zone number 2',
    				'category_id'=>2,  
    				'site_id'=>1, 
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),

			)
		);
    }
}
