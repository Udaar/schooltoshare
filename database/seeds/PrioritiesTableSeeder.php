<?php

use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->delete();
         App\Models\Priority::create([
            'name' => 'Hazardous',
        ]);
         App\Models\Priority::create([
            'name' => 'Urgent',
        ]);
         App\Models\Priority::create([
            'name' => 'Normal',
        ]);
    }
}
