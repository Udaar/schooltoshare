<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->delete();
         App\Models\System::create([
            'name' => 'Lighting',
        ]);
         App\Models\System::create([
            'name' => 'Air Conditioning',
        ]);
         App\Models\System::create([
            'name' => 'Heating system',
        ]);
         App\Models\System::create([
            'name' => 'Plumbing',
        ]);
         App\Models\System::create([
            'name' => 'Electricity',
        ]);
         App\Models\System::create([
            'name' => 'Firefighting',
        ]);
         App\Models\System::create([
            'name' => 'Gas',
        ]);
         App\Models\System::create([
            'name' => 'Heater',
        ]);
         App\Models\System::create([
            'name' => 'Appliances',
        ]);
         App\Models\System::create([
            'name' => 'Telephone, Internet and Networking',
        ]);
         App\Models\System::create([
            'name' => 'TV and satellite',
        ]);
         App\Models\System::create([
            'name' => 'TV and satellite',
        ]);
         App\Models\System::create([
            'name' => 'Intercom',
        ]);
         App\Models\System::create([
            'name' => 'CCTV',
        ]);
         App\Models\System::create([
            'name' => 'Sound system',
        ]);
         App\Models\System::create([
            'name' => 'Windows',
        ]);
         App\Models\System::create([
            'name' => 'Doors',
        ]);
         App\Models\System::create([
            'name' => 'Wardrobes',
        ]);
         App\Models\System::create([
            'name' => 'Floors, ceilings, walls',
        ]);
         App\Models\System::create([
            'name' => 'Furniture',
        ]);
    }
}
