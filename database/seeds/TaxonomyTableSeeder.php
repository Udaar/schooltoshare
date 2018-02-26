<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TaxonomyTableSeeder extends Seeder 
{
 
       public function run()
       {
             //delete users table records
         DB::table('taxonomies')->delete();
         DB::update("ALTER TABLE taxonomies AUTO_INCREMENT = 1;");
         //insert some dummy records
         DB::table('taxonomies')->insert(
                 array(
                      array('name'=>'SiteTax',
                            'label'=>'Sites',
                             'description'=>'Taxonomy for sites',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                     array('name'=>'SiteZoneTax',
                           'label'=>'Site Zones',
                             'description'=>'Taxonomy for site zones ',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                       array('name'=>'BuildingTax',
                             'label'=>'Buildings',
                             'description'=>'Taxonomy for buildings',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                     array('name'=>'ZoneTax',
                            'label'=>'Zones',
                             'description'=>'Taxonomy for zones',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                     array('name'=>'OptionTax',
                           'label'=>'Options',
                             'description'=>'Taxonomy for options',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'TaskTax',
                            'label'=>'Tasks',
                             'description'=>'Taxonomy for tasks',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                     array('name'=>'EquipmentsTax',
                         'label'=>'Equipments',
                             'description'=>'Taxonomy for equipments',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                       array('name'=>'RequestsTax',
                            'label'=>'Requests',
                             'description'=>'Taxonomy for requests',
                             'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                             'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                       
                     
            

                      ));
       
       }
 
}

