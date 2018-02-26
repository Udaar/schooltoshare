<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ZonesHasEquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('zones_has_equipments')->delete();
    	DB::update("ALTER TABLE zones_has_equipments AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('zones_has_equipments')->insert(
    		array(
    			array(
    				'note'=>'the equipment of the hall',
                    'zone_id'=>1,  
    				'equipment_id'=>1,  
    				'installation_date_time'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
    			array(
    				'note'=>'the equipment of the room',
                    'zone_id'=>1,  
    				'equipment_id'=>2,  
    				'installation_date_time'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
    			array(
    				'note'=>'the equipment of the room',
                    'zone_id'=>1,  
    				'equipment_id'=>3,  
    				'installation_date_time'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				'note'=>'the equipment of the room',
                    'zone_id'=>2,  
    				'equipment_id'=>1,  
    				'installation_date_time'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
    			
			)
		);
    }
}
