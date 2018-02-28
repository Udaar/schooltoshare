<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('events')->delete();
    	DB::update("ALTER TABLE buildings AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('events')->insert(
    		array(
    			array(
    				
    				'name'=>'Event 1',  
    				'user_id'=>1,
    				'school_id'=>1,
    				'duration'=>1,
    				'd_type'=>'day',
    				'date'=>Carbon::now()->format('Y-m-d'),
					'time'=>Carbon::now()->format('H:i:s'),
					'type'=>'keynote',
					'location'=>'Class A',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Event 2',  
    				'user_id'=>2,
    				'school_id'=>2,
    				'duration'=>2,
    				'd_type'=>'day',
    				'date'=>Carbon::now()->format('Y-m-d'),
					'time'=>Carbon::now()->format('H:i:s'),
					'type'=>'workshop',
					'location'=>'Class A',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(

    				'name'=>'Event 3',  
    				'user_id'=>3,
    				'school_id'=>3,
    				'duration'=>3,
    				'd_type'=>'hours',
    				'date'=>Carbon::now()->format('Y-m-d'),
					'time'=>Carbon::now()->format('H:i:s'),
					'type'=>'workshop',
					'location'=>'Class A',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				),
				array(
    				
    				'name'=>'Event 4',  
    				'user_id'=>1,
    				'school_id'=>4,
    				'duration'=>1,
    				'd_type'=>'day',
    				'date'=>Carbon::now()->format('Y-m-d'),
					'time'=>Carbon::now()->format('H:i:s'),
					'type'=>'keynote',
					'location'=>'Class A',
    				'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
    				'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
				)

			)
		);
    }
}
