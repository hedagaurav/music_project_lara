<?php

namespace Database\Seeders;

use App\Models\MetadataStatus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetadataStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metadata_status')->insert([
            ['status_id' => 0, 'status_name' => 'Waiting for approval', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 1, 'status_name' => 'Approved', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 2, 'status_name' => 'In Process', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 3, 'status_name' => 'Delivered', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 4, 'status_name' => 'Transfer WithinCMS', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 5, 'status_name' => 'Takendown', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 6, 'status_name' => 'Rejected', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 7, 'status_name' => 'Error', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['status_id' => 8, 'status_name' => 'Live', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}
