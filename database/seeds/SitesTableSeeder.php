<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('sites')->delete();
    	DB::update("ALTER TABLE sites AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('sites')->insert(
    		array(
    			array(
                    'name'=>'Site 1',  
                    'year'=> Carbon::create(2015),
                    'address'=>'address asfasdasd qweqweqweweqwe ',
                    'category_id'=>1,
                    'emergency_info'=>'Info Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique voluptatibus eligendi, et doloremque voluptatum quas rem quisquam accusantium alias assumenda esse laboriosam vel hic temporibus amet, ad est minus delectus.',
                    'gps_lat'=>30.061870,
                    'gps_long'=>31.347277,
                    'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ),
                array(
    				'name'=>'Site 2',  
    				'year'=> Carbon::create(2015),
    				'address'=>'address Nasr city',
    				'category_id'=>1,
    				'emergency_info'=>'Info Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique voluptatibus eligendi, et doloremque voluptatum quas rem quisquam accusantium alias assumenda esse laboriosam vel hic temporibus amet, ad est minus delectus.',
    				'gps_lat'=>30.061870,
    				'gps_long'=>31.347277,
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),

			)
		);

    }
}
