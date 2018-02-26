<?php

use App\Models\InvoiceStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('vendors')->delete();
        DB::table('customers')->delete();
        DB::table('invoice_status')->delete();
        DB::table('payment_status')->delete();
        DB::table('payment_methods')->delete();
        DB::table('expenses_types')->delete();
        // factory(Bimmunity\Invoice\Models\Vendor::class, 10)->create();
        // factory(Bimmunity\Invoice\Models\Customer::class, 10)->create();
        DB::table('invoice_status')->insert([
            ['name' => 'open'],
            ['name' => 'close'],
            ['name' => 'pending']
        ]);
        DB::table('payment_status')->insert([
            ['name' => 'accepted'],
            ['name' => 'rejected'],
            ['name' => 'pending']
        ]);
        DB::table('payment_methods')->insert([
            ['name' => 'Paypal'],
            ['name' => 'Credit & debit cards'],
            ['name' => 'Bank account'],
            ['name' => 'Direct carrier billing (DCB)']
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
