<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('buildings')->delete();
    	DB::update("ALTER TABLE buildings AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('Schools')->insert(
    		array(
    			array(
    				
    				'name'=>'School 1',  
    				'year'=>2005,
    				'address'=>'Cairo',
    				'phone'=>'+20 - 55177 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.055606,
					'gps_long'=>31.3601597,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 2',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.15444,
					'gps_long'=>31.4299107,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 3',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.0623819,
					'gps_long'=>31.3060738,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 4',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.0372298,
					'gps_long'=>31.2523297,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 5',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.03329,
					'gps_long'=>31.2524935,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 6',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.0361564,
					'gps_long'=>31.254287,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 7',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.0659488,
					'gps_long'=>31.3324045,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 8',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>30.04874,
					'gps_long'=>31.3880203,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				)

			)
		);
    }
}
