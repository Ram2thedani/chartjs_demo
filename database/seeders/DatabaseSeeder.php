<?php

namespace Database\Seeders;

use App\Models\Religion;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Student::create([
            'name' => 'Fatima',
            'religion_id' => '1',
        ]);
        Student::create([
            'name' => 'Zara',
            'religion_id' => '1',
        ]);
        Student::create([
            'name' => 'Christina',
            'religion_id' => '2',
        ]);
        Student::create([
            'name' => 'Lee',
            'religion_id' => '3',
        ]);
        Religion::create([
            'name' => 'Islam'
        ]);
        Religion::create([
            'name' => 'Christianity'
        ]);
        Religion::create([
            'name' => 'Buddhism'
        ]);
    }
}
