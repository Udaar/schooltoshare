<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('equipments')->delete();
    	DB::update("ALTER TABLE equipments AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('equipments')->insert(
    		array(
    			array(
                    'name'=>'Equipment 1',
                    'description'=>'the equipment number 1 description.',  
                    'barcode'=>'12335',  
                    'zone_price'=>150,  
                    'category_id'=>7,  
                    'minmum_quantity'=>11,  
                    'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
                    'name'=>'Equipment 2',
                    'description'=>'the equipment number 2 description.',  
                    'barcode'=>'23457',  
                    'zone_price'=>267,  
                    'category_id'=>7,  
                    'minmum_quantity'=>3,  
                    'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Equipment 3',
                    'description'=>'the equipment number 3 description.',  
    				'barcode'=>'345647',  
                    'zone_price'=>309,  
                    'category_id'=>7,  
                    'minmum_quantity'=>4,  
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
    			
			)
		);
    }
}
