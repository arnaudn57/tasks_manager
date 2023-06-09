<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use Database\Factories\TaskFactory;
use Illuminate\Database\Seeder;
use \App\Models\Task;
use \App\Models\MaintenanceConvert;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    // $this->call(TasksTableSeeder::class);

      Task::factory()->count(3)->create();
      MaintenanceConvert::factory()->count(3)->create();
    }
}
