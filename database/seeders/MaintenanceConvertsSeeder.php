<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class MaintenanceConvertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maintenance_converts')->insert([
            'websiteName' => 'https://www.google.com',
            'listConvert' => 'https://www.google.com',
        ]);
    }
}
