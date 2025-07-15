<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        Club::create([
            'name' => 'Jakarta United',
            'city' => 'Jakarta',
            'stadium' => 'Stadion Merdeka',
            'founded_year' => 1998,
        ]);

        Club::create([
            'name' => 'Bandung Warriors',
            'city' => 'Bandung',
            'stadium' => 'Stadion Lautan Api',
            'founded_year' => 2002,
        ]);
    }
}
