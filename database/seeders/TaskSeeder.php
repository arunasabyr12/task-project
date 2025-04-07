<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            [
                'title' => 'documentation',
                'description' => 'to carefully read php documentation',
                'status' => 'in_progress',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'lecture',
                'description' => 'to listen to the video lecture',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'problem solving',
                'description' => 'to solve the homework problem',
                'status' => 'created',
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}
