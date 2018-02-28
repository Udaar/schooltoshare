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
    				
    				'name'=>'School 1', 
    				'address'=>'Cairo',
    				'phone'=>'+20 - 55177 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.470275,
					'gps_long'=>54.351779,
					'country_id'=>1,
					'city_id'=>2,
					'owner_id'=>2,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 2',  
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.434955,
					'gps_long'=>54.412551,
					'country_id'=>2,
					'city_id'=>5,
					'owner_id'=>1,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 3', 
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.467361,
					'gps_long'=>54.378971,
					'country_id'=>1,
					'city_id'=>3,
					'owner_id'=>5,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 4',  
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.476273,
					'gps_long'=>54.321471,
					'country_id'=>1,
					'city_id'=>4,
					'owner_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 5', 
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>24.470193,
					'gps_long'=>54.367659,
					'country_id'=>2,
					'city_id'=>6,
					'owner_id'=>4,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 6',  
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>23.661003,
					'gps_long'=>53.700645,
					'country_id'=>2,
					'city_id'=>7,
					'owner_id'=>6,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 7', 
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>22.661003,
					'gps_long'=>55.273109,
					'country_id'=>2,
					'city_id'=>5,
					'owner_id'=>8,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'School 8',
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>25.207070,
					'gps_long'=>50.273107,
					'country_id'=>1,
					'city_id'=>1,
					'owner_id'=>7,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				)

			)
		);
    }
}
