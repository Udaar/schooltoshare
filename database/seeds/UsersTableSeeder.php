<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//delete users table records
        DB::table('users')->delete();
        DB::update("ALTER TABLE users AUTO_INCREMENT = 1;");
        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'admin'
        ]);
         App\User::create([
            'name' => 'School',
            'email' => 'school@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'school'
        ]);
         App\User::create([
            'name' => 'Government',
            'email' => 'gov@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'government'
        ]);

         App\User::create([
            'name' => 'Funding Organization',
            'email' => 'fundorg@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'fundorg'
        ]);
        App\User::create([
            'name' => 'Funding Organization 2',
            'email' => 'fundorg2@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'fundorg'
        ]);
        App\User::create([
            'name' => 'Funding Organization 3',
            'email' => 'fundorg3@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'fundorg'
        ]);
        App\User::create([
            'name' => 'Funding Organization 4',
            'email' => 'fundorg4@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'fundorg'
        ]);
         App\User::create([
            'name' => 'Children',
            'email' => 'ch@udaar.org',
            'password' => bcrypt('123456'),
            'picture'  => '/metronic/images/no-image.jpg',
            'type'=>'children'
        ]);
    }
}
