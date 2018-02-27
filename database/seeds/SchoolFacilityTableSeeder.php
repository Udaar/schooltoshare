<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SchoolFacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('school_facility')->delete();
    	DB::update("ALTER TABLE school_facility AUTO_INCREMENT = 1;");
         //insert some dummy records
    	DB::table('school_facility')->insert(
    		array(
    			array(
                    'school_id'=>1,
                    'facility_id'=>1
				),
    			array(
                    'school_id'=>1,
                    'facility_id'=>2
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>4
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>1
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>5
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>9
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>12
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>1
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>14
                ),
                array(
                    'school_id'=>1,
                    'facility_id'=>15
                ),
                array(
                    'school_id'=>2,
                    'facility_id'=>6
                ),
                array(
                    'school_id'=>2,
                    'facility_id'=>10
                ),
                array(
                    'school_id'=>2,
                    'facility_id'=>16
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>1
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>6
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>8
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>9
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>10
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>2
                ),
                array(
                    'school_id'=>3,
                    'facility_id'=>13
                ),
                array(
                    'school_id'=>4,
                    'facility_id'=>1
                ),
                array(
                    'school_id'=>4,
                    'facility_id'=>3
                ),
                array(
                    'school_id'=>4,
                    'facility_id'=>5
                ),
                array(
                    'school_id'=>4,
                    'facility_id'=>8
                ),
                
                array(
                    'school_id'=>4,
                    'facility_id'=>13
                ),
                array(
                    'school_id'=>4,
                    'facility_id'=>16
                ),
                array(
                    'school_id'=>5,
                    'facility_id'=>1
                ),
                array(
                    'school_id'=>5,
                    'facility_id'=>6
                ),
                array(
                    'school_id'=>5,
                    'facility_id'=>9
                ),
                array(
                    'school_id'=>5,
                    'facility_id'=>11
                ),
                array(
                    'school_id'=>5,
                    'facility_id'=>12
                ),
                array(
                    'school_id'=>6,
                    'facility_id'=>4
                ),
                array(
                    'school_id'=>6,
                    'facility_id'=>6
                ),
                array(
                    'school_id'=>6,
                    'facility_id'=>12
                ),
                array(
                    'school_id'=>6,
                    'facility_id'=>16
                ),
                array(
                    'school_id'=>7,
                    'facility_id'=>10
                ),
                array(
                    'school_id'=>7,
                    'facility_id'=>14
                ),
                array(
                    'school_id'=>7,
                    'facility_id'=>16
                ),
                array(
                    'school_id'=>8,
                    'facility_id'=>1
                ),
                array(
                    'school_id'=>8,
                    'facility_id'=>2
                ),
                array(
                    'school_id'=>8,
                    'facility_id'=>4
                ),
                array(
                    'school_id'=>8,
                    'facility_id'=>8
                ),
                array(
                    'school_id'=>8,
                    'facility_id'=>16
                ),
                
                

			)
		);
    }
}