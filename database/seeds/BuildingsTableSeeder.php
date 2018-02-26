<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BuildingsTableSeeder extends Seeder
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
    	DB::table('buildings')->insert(
    		array(
    			array(
    				
    				'name'=>'Building 1',  
    				'year'=>2005,
    				'address'=>'Cairo',
    				'phone'=>'+20 - 55177 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.470275,
					'gps_long'=>54.351779,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 2',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.434955,
					'gps_long'=>54.412551,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 3',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.467361,
					'gps_long'=>54.378971,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 4',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.476273,
					'gps_long'=>54.321471,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 5',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.470193,
					'gps_long'=>54.367659,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 6',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>23.661003,
					'gps_long'=>53.700645,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 7',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>22.661003,
					'gps_long'=>55.273109,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Building 8',  
    				'year'=>2010,
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>25.207070,
					'gps_long'=>50.273107,
					'country'=>'egypt',
					'city'=>'assuit',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				)

			)
		);
    }
}
