<?php

use Illuminate\Database\Seeder;

class FielsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('files')->delete();                
        App\Models\File::create([
            'name'=>'school1.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school1.jpg',
            'size'=>8537,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school2.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school2.jpg',
            'size'=>935604,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school3.jpg',
            'extension'=>'jpeg',
            'path'=>'uploads/school3.jpeg',
            'size'=>3618912,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school4.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school4.jpg',
            'size'=>147063,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school5.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school5.jpg',
            'size'=>466510,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school6.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school6.jpg',
            'size'=>132910,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school7.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school7.jpg',
            'size'=>45602,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
        App\Models\File::create([
            'name'=>'school8.jpg',
            'extension'=>'jpg',
            'path'=>'uploads/school8.jpg',
            'size'=>211132,
            'type'=>null,
            'category_id'=>null,
            'folder_id'=>null,
            'created_by'=>null
        ]);
       
    }
}
