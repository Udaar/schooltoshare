<?php

use Illuminate\Database\Seeder;

class SpacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spaces')->delete();
        Bimmunity\Bimmodels\Models\Space::create([
            'name' => 'Bed Room',
        ]);
        Bimmunity\Bimmodels\Models\Space::create([
            'name' => 'Bath Room',
        ]);
        Bimmunity\Bimmodels\Models\Space::create([
            'name' => 'Living Room',
        ]);
         
    }
}
