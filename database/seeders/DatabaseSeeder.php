<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MetadataData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Gaurav superuser',
            'email' => 'admin@admin.com',
            'password' => bcrypt('test@123'),
        ]);
        $this->call([
            MetadataStatusSeeder::class,
            ClientDataSeeder::class,
            MetadataDataSeeder::class
        ]);
    }
}
