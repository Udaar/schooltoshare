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
    				
    				'name'=>'Dar Alsalam', 
    				'address'=>'Cairo',
    				'phone'=>'+20 - 55177 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.173912,
					'gps_long'=> 31.191470,
					'country_id'=>1,
					'city_id'=>2,
					'owner_id'=>2,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'New ALsalam',  
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.193116, 
					'gps_long'=>31.183815,
					'country_id'=>2,
					'city_id'=>5,
					'owner_id'=>1,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Dar Heraa', 
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.182472, 
					'gps_long'=>31.188587,
					'country_id'=>1,
					'city_id'=>3,
					'owner_id'=>5,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Altahrir',  
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.207707, 
					'gps_long'=>31.186160,
					'country_id'=>1,
					'city_id'=>4,
					'owner_id'=>3,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'University School', 
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.191232, 
					'gps_long'=>31.176169,
					'country_id'=>2,
					'city_id'=>6,
					'owner_id'=>4,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Naser Secondary',  
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.193712, 
					'gps_long'=>31.181834,
					'country_id'=>2,
					'city_id'=>7,
					'owner_id'=>6,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Alnahda', 
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.205966, 
					'gps_long'=>31.179558,
					'country_id'=>2,
					'city_id'=>5,
					'owner_id'=>8,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Khadija Yusuf Secondary',
    				'address'=>'antalia',
    				'phone'=>'+99 - 5942 669',
    				'emergency_info'=>'Emergency Info - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, dolores facilis id harum itaque magni minima, expedita saepe aliquam unde dolorem corporis iusto atque esse consequatur, magnam quidem voluptate beatae.',
    				'gps_lat'=>27.177570, 
					'gps_long'=>31.179568,
					'country_id'=>1,
					'city_id'=>1,
					'owner_id'=>7,
					'gov_id'=>3,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				)

			)
		);
    }
}
