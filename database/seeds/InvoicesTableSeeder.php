<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->delete();
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>4000,
            'customer_id'=>null,
            'title'=>'Invoice 1',
            'code'=>11,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-02-06 13:04:20',
            'due_date'=>'2018-03-06 13:04:20',
            'total'=>3900,
            'discount'=>100,
            'status_id'=>1,
            'currency_id'=>1
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>5000,
            'customer_id'=>null,
            'title'=>'Invoice 2',
            'code'=>22,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-03-06 13:04:20',
            'due_date'=>'2018-04-06 13:04:20',
            'total'=>4800,
            'discount'=>200,
            'status_id'=>1,
            'currency_id'=>2
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>10000,
            'customer_id'=>null,
            'title'=>'Invoice 3',
            'code'=>33,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-04-06 13:04:20',
            'due_date'=>'2018-06-06 13:04:20',
            'total'=>1900,
            'discount'=>100,
            'status_id'=>2,
            'currency_id'=>3
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>2000,
            'customer_id'=>null,
            'title'=>'Invoice 4',
            'code'=>44,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-05-06 13:04:20',
            'due_date'=>'2018-06-06 13:04:20',
            'total'=>1900,
            'discount'=>100,
            'status_id'=>2,
            'currency_id'=>3
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>3000,
            'customer_id'=>null,
            'title'=>'Invoice 5',
            'code'=>55,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-06-06 13:04:20',
            'due_date'=>'2018-07-06 13:04:20',
            'total'=>2700,
            'discount'=>300,
            'status_id'=>2,
            'currency_id'=>4
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>6000,
            'customer_id'=>null,
            'title'=>'Invoice 6',
            'code'=>66,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-07-06 13:04:20',
            'due_date'=>'2018-08-06 13:04:20',
            'total'=>5600,
            'discount'=>400,
            'status_id'=>1,
            'currency_id'=>1
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>7000,
            'customer_id'=>null,
            'title'=>'Invoice 7',
            'code'=>77,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-08-06 13:04:20',
            'due_date'=>'2018-09-06 13:04:20',
            'total'=>6500,
            'discount'=>500,
            'status_id'=>1,
            'currency_id'=>1
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>8000,
            'customer_id'=>null,
            'title'=>'Invoice 8',
            'code'=>88,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-09-06 13:04:20',
            'due_date'=>'2018-10-06 13:04:20',
            'total'=>7400,
            'discount'=>600,
            'status_id'=>1,
            'currency_id'=>1
            
        ]);
        \Bimmunity\Invoice\Models\Invoice::create([
            'user_id'=>3,
            'amount'=>9000,
            'customer_id'=>null,
            'title'=>'Invoice 9',
            'code'=>99,
            'description'=>'description',
            'terms'=>'terms',
            'issue_date'=>'2018-10-06 13:04:20',
            'due_date'=>'2018-11-06 13:04:20',
            'total'=>3900,
            'discount'=>8300,
            'status_id'=>1,
            'currency_id'=>1
            
        ]);

    }
}
