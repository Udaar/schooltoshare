<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->delete();
         App\Models\Option::create([
            'name' => 'forge_data_read_token',
            'value' => 'eyJhbGciOiJIUzI1NiIsImtpZCI6Imp3dF9zeW1tZXRyaWNfa2V5In0.eyJjbGllbnRfaWQiOiJqb2xuWFJab0diMTJzeEY0bjhXeWZOVHV6QWgyNzhwZSIsImV4cCI6MTQ5MTUwNTU5NCwic2NvcGUiOlsiZGF0YTpyZWFkIl0sImF1ZCI6Imh0dHBzOi8vYXV0b2Rlc2suY29tL2F1ZC9qd3RleHAxNDQwIiwianRpIjoiSG0zUUppVWJ5Q1hsRmhQUjNTMmNsbERWNzBrSmdwQm1ubk9PbUhYMVU1clRRWm9ucUNiSW9uVTVxV0dXWlFNVyJ9.BREUSqMaXVUISdvEnEAeSx6Bw4t1JsEmr8UqDasB1SY',
            'expired_at'=>\Carbon\Carbon::now()
        ]);
    }
}
