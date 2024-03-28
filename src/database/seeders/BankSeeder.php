<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Kumpuldev\DaftarBankIndonesia\RawDataGetter;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     *
     * @return void
     */
    public function run()
    {
        // Get Data
        $banks = RawDataGetter::getBanks();

        // Insert Data to Database
        DB::table('banks')->insert($banks);
    }
}