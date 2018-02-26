<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
		DB::table('services')->delete();
		DB::update("ALTER TABLE services AUTO_INCREMENT = 1;");
		//insert some dummy records
		DB::table('services')->insert(
		    array(
		            array('name'=>'Service 1',
		                'description'=>' Service 1: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis nam, a voluptas porro quibusdam, molestias consequuntur vitae nemo. Deserunt odio veritatis possimus, libero pariatur nulla porro exercitationem perspiciatis dolores quam!',

		                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
		                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
		            ),
		            
		            array('name'=>'Service 2',
		                'description'=>' Service 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis nam, a voluptas porro quibusdam, molestias consequuntur vitae nemo. Deserunt odio veritatis possimus, libero pariatur nulla porro exercitationem perspiciatis dolores quam!',

		                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
		                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
		            ),
		            

        ));
    }
}
