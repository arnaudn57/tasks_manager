<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;


class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->inserts([
            'name' => 'Task 1',
            'description' => 'Task 1 description',
            'status' => 'pending',
            'user_id' => 1,
        ]);
    }
}
