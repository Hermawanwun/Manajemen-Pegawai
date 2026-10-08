<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run(): void
    {
        Department::factory()->createMany([
            ['name' => 'Human Resources', 'description' => 'HR & recruitment', 'is_active' => true],
            ['name' => 'Finance', 'description' => 'Accounting & payment', 'is_active' => true],
            ['name' => 'IT', 'description' => 'Systems & development', 'is_active' => true],
        ]);

        Position::factory()->createMany([
            ['name' => 'Staff', 'level' => 1, 'description' => 'Entry level', 'is_active' => true],
            ['name' => 'Senior Staff', 'level' => 2, 'description' => 'Experienced', 'is_active' => true],
            ['name' => 'Manager', 'level' => 3, 'description' => 'Lead team', 'is_active' => true],
        ]);
    }
}
