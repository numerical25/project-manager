<?php

namespace Database\Seeders;

use App\Models\WorkRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkRequest::factory()->count(50)->create();
    }
}
