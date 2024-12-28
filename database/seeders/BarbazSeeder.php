<?php

namespace Database\Seeders;

use App\Models\Barbaz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarbazSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barbaz::factory()->create([
            'date_value' => "2024-01-01",
            'created_at' => "2024-01-01",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-01-02",
            'created_at' => "2024-01-02",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-01-03",
            'created_at' => "2024-01-03",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-02-01",
            'created_at' => "2024-02-01",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-02-02",
            'created_at' => "2024-02-02",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-02-03",
            'created_at' => "2024-02-03",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-03-01",
            'created_at' => "2024-03-01",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-03-02",
            'created_at' => "2024-03-02",
        ]);
        Barbaz::factory()->create([
            'date_value' => "2024-03-03",
            'created_at' => "2024-03-03",
        ]);
    }
}
