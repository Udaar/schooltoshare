<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Bimmunity\Invoice\Models\Vendor::class, function (Faker\Generator $faker) {

    return [
        'user_id'       => $faker->randomElement(App\User::all()->pluck('id')->toArray()),
        'name'          => $faker->name,
        'work_email'    => $faker->safeEmail,
        'work_phone'    => $faker->phoneNumber,
        'address'       => $faker->address
    ];
});

$factory->define(Bimmunity\Invoice\Model\Customer::class, function (Faker\Generator $faker) {

    return [
        'user_id'       => $faker->randomElement(App\User::all()->pluck('id')->toArray()),
        'name'          => $faker->name,
        'address'       => $faker->address,
    ];
});

$factory->define(Bimmunity\Invoice\Model\InvoiceStatus::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->randomElement(['open', 'close', 'pending']),
    ];
});

$factory->define(Bimmunity\Invoice\Model\PaymentMethod::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->randomElement(['Paypal', 'Credit & debit cards', 'Bank account', 'Direct carrier billing (DCB)']),
    ];
});

$factory->define(Bimmunity\Invoice\Model\PaymentStatus::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->randomElement(['accepted', 'rejected', 'pending']),
    ];
});

$factory->define(Bimmunity\Invoice\Model\ExpensesType::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->randomElement(['Rent', 'Insurance', 'Fees', 'Wages', 'Taxes', 'Supplies']),
    ];
});
$factory->define(Bimmunity\Inventory\Models\Item::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->name,
        'barcode'       =>$faker->randomNumber( NULL, false),
        'category_id'   =>$faker->randomElement(App\Models\Category::all()->pluck('id')->toArray()),
        'description'   =>$faker->text(rand(10,200)),
        'created_by'    =>$faker->randomElement(App\User::all()->pluck('id')->toArray()),
        'element_status' =>0
    ];
});
$factory->define(Bimmunity\Invoice\Model\Account::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->name,
        'type'          =>$faker->randomElement(['Debit', 'Credit', 'Cash', 'Bank Account']),
        'number'        =>$faker->randomNumber( NULL, false),
        'balance'       =>$faker->randomNumber( 7, false) ,
        'currency'      =>$faker->randomElement(App\Models\Currency::all()->pluck('id')->toArray())
    ];
});
$factory->define(Bimmunity\HR\Models\Competency::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->name,
        'description'   =>$faker->text(rand(10,200))
    ];
});

$factory->define(Bimmunity\HR\Models\Competency_attribute::class, function (Faker\Generator $faker) {

    return [
        'name'          => $faker->name,
        'competency_id'   =>$faker->randomElement(Bimmunity\HR\Models\Competency::all()->pluck('id')->toArray())
    ];
});
$factory->define(Bimmunity\HR\Models\Job::class, function (Faker\Generator $faker) {

    return [
        'job_code'      =>$faker->randomNumber( NULL, false),
        'job_title'     =>$faker->text(rand(10,10)),
        'job_description'=>$faker->text(rand(10,200))
        
    ];
});

