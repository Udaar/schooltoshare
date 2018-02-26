<?php

use Illuminate\Database\Seeder;

class BimModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bim_models')->delete();
         App\Models\BimModel::create([
            'name' => 'tower',
            'building_id'=> 1,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'ARC',
            'description' => 'Tower Model',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA0LTA1LTIwLTI4LTM1LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1VEUl9UUkxfVFdSX0FSQy0wMS5ydnQ',
        ]);
         App\Models\BimModel::create([
            'name' => 'unit',
            'building_id'=> 1,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'STR',
            'description' => 'Tower Model',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA0LTEwLTE2LTI2LTE4LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1VEUl9UUkxfVU5UX0FSQy1WMDFBLnJ2dA',
        ]);
         App\Models\BimModel::create([
            'name' => 'faisal',
            'building_id'=> 1,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'ELE',
            'description' => 'Faisal Bank',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA0LTIzLTA0LTE1LTIyLWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlLzE3RUdDUjAwMS1GSUItWFhYLU1EMy1BUkMtWFgtQUwtQVotMDAwMDEtVjAxQS5ydnQ',
        ]);
        App\Models\BimModel::create([
            'name' => 'mall',
            'building_id'=> 2,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'MHV',
            'description' => 'mall',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA3LTE0LTEzLTM0LTM5LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1JldGFpbCUyMFNhbXBsZS5ydnQ',
        ]);
        App\Models\BimModel::create([
            'name' => 'ADmall',
            'building_id'=> 2,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'FRS',
            'description' => 'abu dhabi mall',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA3LTE0LTEzLTEzLTQwLWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL0FETS0wMDEucnZ0',
        ]);
        App\Models\BimModel::create([
            'name' => 'tower',
            'building_id'=> 1,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'PDS',
            'description' => 'Tower Model',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA0LTA1LTIwLTI4LTM1LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1VEUl9UUkxfVFdSX0FSQy0wMS5ydnQ',
        ]);
         App\Models\BimModel::create([
            'name' => 'unit',
            'building_id'=> 1,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'INF',
            'description' => 'Tower Model',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA0LTEwLTE2LTI2LTE4LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1VEUl9UUkxfVU5UX0FSQy1WMDFBLnJ2dA',
        ]);
         App\Models\BimModel::create([
            'name' => 'faisal',
            'building_id'=> 1,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'LSC',
            'description' => 'Faisal Bank',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA0LTIzLTA0LTE1LTIyLWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlLzE3RUdDUjAwMS1GSUItWFhYLU1EMy1BUkMtWFgtQUwtQVotMDAwMDEtVjAxQS5ydnQ',
        ]);
        App\Models\BimModel::create([
            'name' => 'mall',
            'building_id'=> 2,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'CIV',
            'description' => 'mall',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA3LTE0LTEzLTM0LTM5LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1JldGFpbCUyMFNhbXBsZS5ydnQ',
        ]);
        App\Models\BimModel::create([
            'name' => 'ADmall',
            'building_id'=> 2,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'TEL',
            'description' => 'abu dhabi mall',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA3LTE0LTEzLTEzLTQwLWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL0FETS0wMDEucnZ0',
        ]);
        App\Models\BimModel::create([
            'name' => 'mall',
            'building_id'=> 2,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'FLS',
            'description' => 'mall',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA3LTE0LTEzLTM0LTM5LWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL1JldGFpbCUyMFNhbXBsZS5ydnQ',
        ]);
        App\Models\BimModel::create([
            'name' => 'ADmall',
            'building_id'=> 2,
            'project_code'=>'xxx',
            'organization_code'=> 'ddd',
            'document_type_code'=>'sss',
            'discipline_code'=> 'MLD',
            'description' => 'abu dhabi mall',
            'urn' => 'dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6bW9kZWwyMDE3LTA3LTE0LTEzLTEzLTQwLWQ0MWQ4Y2Q5OGYwMGIyMDRlOTgwMDk5OGVjZjg0MjdlL0FETS0wMDEucnZ0',
        ]);
    }
}
