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
            'location' => 'Jakarta',
            'stadium' => 'Stadion Merdeka',
        ]);

        Club::create([
            'name' => 'Bandung Warriors',
            'location' => 'Bandung',
            'stadium' => 'Stadion Lautan Api',
        ]);
    }
}
