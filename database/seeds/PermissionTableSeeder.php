<?php

use Illuminate\Database\Seeder;
use App\Models\Privilege;
use Carbon\Carbon;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
    	DB::table('privileges')->delete();
         //insert some dummy records
    	Privilege::insert(Privilege::getAllPermissions());
    }

}
