<?php

use Illuminate\Database\Seeder;

class ReservationItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation_items')->delete();
         App\Models\ReservationItem::create([
            'name' => 'Parking',
        ]);
         App\Models\ReservationItem::create([
            'name' => 'Limousine service',
        ]);
         App\Models\ReservationItem::create([
            'name' => 'Gym',
        ]);
         App\Models\ReservationItem::create([
            'name' => 'Massage',
        ]);
         App\Models\ReservationItem::create([
            'name' => 'Space booking',
        ]);
    }
}
