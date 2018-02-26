<?php

use Illuminate\Database\Seeder;

class FileablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fileables')->delete();                
        DB::table('fileables')->insert(
            array(
                    array(
                        'file_id'=>1,
                        'fileable_id'=>1,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>2,
                        'fileable_id'=>2,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>3,
                        'fileable_id'=>3,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>4,
                        'fileable_id'=>4,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>5,
                        'fileable_id'=>5,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>6,
                        'fileable_id'=>6,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>7,
                        'fileable_id'=>7,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1),
                    array(
                        'file_id'=>8,
                        'fileable_id'=>8,
                        'fileable_type'=>'Bimmunity\Bimmodels\Models\Building',
                        'is_profile'=>1)
            ));
       
    }
}
