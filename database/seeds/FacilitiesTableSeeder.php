<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('facilities')->delete();
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 1',
         'building_id'=> 1
      ]);
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 2',
         'building_id'=> 1
      ]);
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 3',
         'building_id'=> 1
      ]);
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 4',
         'building_id'=> 1
      ]);


      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 1',
         'building_id'=> 2
      ]);
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 2',
         'building_id'=> 2
      ]);
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 3',
         'building_id'=> 2
      ]);
      \Bimmunity\Bimmodels\Models\Facility::create([
         'name' => 'Facility 4',
         'building_id'=> 2
      ]);
    }
}
