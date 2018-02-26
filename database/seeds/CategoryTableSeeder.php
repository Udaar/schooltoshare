<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoryTableSeeder extends Seeder 
{
 
       public function run()
       {
         //delete users table records
         DB::table('categories')->delete();
         DB::update("ALTER TABLE categories AUTO_INCREMENT = 1;");
         //insert some dummy records
         DB::table('categories')->insert(
                 array(
                         array('name'=>'Uncategorized sites ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'1',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Site Zones ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'2',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Buildings ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'3',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Zones ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'4',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Options ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'5',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Tasks ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'6',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Equipments ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'7',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
                      array('name'=>'Uncategorized Requests ',
                               'parent_id'=>'0',  
                               'taxonomy_id'=>'8',
                               'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                               'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                           ),
       
                      ));
        
       
       }
 
}

