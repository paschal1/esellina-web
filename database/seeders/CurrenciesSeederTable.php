<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
             [
                'currency_name' => 'Us Dollar',
                'currency_symbol' => '$',
                'currency_code' => 'USD',
                'exchange_rate' => 1,
             ],
            [
                'currency_name' => 'Nigerian Naira',
                'currency_symbol' => 'NGN',
                'currency_code' => 'NGN',
                'exchange_rate' => 458.83,
            ],
            
              [
                'currency_name' => 'Nepall Ruppes',
                'currency_symbol' => 'Rs',
                'currency_code' => 'NEP',
                'exchange_rate' => 115,
            ]

            ]
            );
    }
}
