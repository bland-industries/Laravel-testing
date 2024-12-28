<?php

use App\Models\Barbaz;
use App\Models\Foobar;
use Flowframe\Trend\Trend;
use Illuminate\Support\Facades\Artisan;

it('aggregate counts right with date', function () {
    Artisan::call('migrate:refresh');
    Foobar::factory()->create([
        'date' => "2024-01-02",
        'created_at' => "2024-01-02",
    ]);
    Foobar::factory()->create([
        'date' => "2024-01-03",
        'created_at' => "2024-01-03",
    ]);
    Foobar::factory()->create([
        'date' => "2024-01-04",
        'created_at' => "2024-01-04",
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
        'date' => "2024-02-04",
        'created_at' => "2024-02-04",
    ]);
    Foobar::factory()->create([
        'date' => "2024-03-02",
        'created_at' => "2024-03-02",
    ]);
    Foobar::factory()->create([
        'date' => "2024-03-03",
        'created_at' => "2024-03-03",
    ]);
    Foobar::factory()->create([
        'date' => "2024-03-04",
        'created_at' => "2024-03-04",
    ]);

    dump(Foobar::all());

    $data = Trend::model(Foobar::class)
        ->dateColumn('date')
        ->between(
            start: \Carbon\Carbon::create('2024', 1, 1),
            end: \Carbon\Carbon::create('2024', 3, 30),
        )
        ->perMonth()
        ->count();

    expect($data[0]->aggregate)->toBe(3)
        ->and($data[1]->aggregate)->toBe(3)
        ->and($data[2]->aggregate)->toBe(3);
});
it('aggregate counts right with date_value', function () {
    Artisan::call('migrate:refresh');
    Barbaz::factory()->create([
        'date_value' => "2024-01-02",
        'created_at' => "2024-01-02",
    ]);
    Barbaz::factory()->create([
        'date_value' => "2024-01-03",
        'created_at' => "2024-01-03",
    ]);
    Barbaz::factory()->create([
        'date_value' => "2024-01-04",
        'created_at' => "2024-01-04",
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
        'date_value' => "2024-02-04",
        'created_at' => "2024-02-04",
    ]);
    Barbaz::factory()->create([
        'date_value' => "2024-03-02",
        'created_at' => "2024-03-02",
    ]);
    Barbaz::factory()->create([
        'date_value' => "2024-03-03",
        'created_at' => "2024-03-03",
    ]);
    Barbaz::factory()->create([
        'date_value' => "2024-03-04",
        'created_at' => "2024-03-04",
    ]);

    dump(Barbaz::all());

    $data = Trend::model(Barbaz::class)
        ->dateColumn('date_value')
        ->between(
            start: \Carbon\Carbon::create('2024', 1, 1),
            end: \Carbon\Carbon::create('2024', 3, 30),
        )
        ->perMonth()
        ->count();

    expect($data[0]->aggregate)->toBe(3)
        ->and($data[1]->aggregate)->toBe(3)
        ->and($data[2]->aggregate)->toBe(3);
});
