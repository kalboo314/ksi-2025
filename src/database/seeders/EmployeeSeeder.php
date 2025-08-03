<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'name' => 'Haikal Jamil',
            'position' => 'Manajer Keuangan',
            'salary' => encrypt(15000000), // dienkripsi!
            'email' => 'haikal@example.com',
        ]);
    }
}