<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_data')->insert([
            ['parentLabelCompany' => 'XYZ Company Go', 'country' => 'India', 'state' => 'West Bengal', 'city' => 'Parganas', 'status' => 2, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['parentLabelCompany' => 'Go Go Music', 'country' => 'India', 'state' => 'Gujarat', 'city' => 'Ahmedabad', 'status' => 2, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['parentLabelCompany' => 'Main Max Pro', 'country' => 'India', 'state' => 'Uttar Pradesh', 'city' => 'Ghaziabad', 'status' => 2, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}


