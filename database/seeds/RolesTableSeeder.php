<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
         App\Models\Role::create([
            'name' => 'Property Manager',
        ]);
         App\Models\Role::create([
            'name' => 'Facility Manager',
        ]);
         App\Models\Role::create([
            'name' => 'Service Provider',
        ]);
         App\Models\Role::create([
            'name' => 'Tenant',
        ]);
    }
}
