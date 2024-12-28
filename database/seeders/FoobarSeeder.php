<?php

namespace Database\Seeders;

use App\Models\Foobar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoobarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foobar::factory()->create([
            'date' => "2024-01-01",
            'created_at' => "2024-01-01",
        ]);
        Foobar::factory()->create([
            'date' => "2024-01-02",
            'created_at' => "2024-01-02",
        ]);
        Foobar::factory()->create([
            'date' => "2024-01-03",
            'created_at' => "2024-01-03",
        ]);
        Foobar::factory()->create([
            'date' => "2024-02-01",
            'created_at' => "2024-02-01",
        ]);
        Foobar::factory()->create([
            'date' => "2024-02-02",
            'created_at' => "2024-02-02",
        ]);
        Foobar::factory()->create([
            'date' => "2024-02-03",
            'created_at' => "2024-02-03",
        ]);
        Foobar::factory()->create([
            'date' => "2024-03-01",
            'created_at' => "2024-03-01",
        ]);
        Foobar::factory()->create([
            'date' => "2024-03-02",
            'created_at' => "2024-03-02",
        ]);
        Foobar::factory()->create([
            'date' => "2024-03-03",
            'created_at' => "2024-03-03",
        ]);
    }
}
