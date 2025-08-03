<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use App\Models\Club;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        $jakartaUnited = Club::where('name', 'Jakarta United')->first();
        $bandungWarriors = Club::where('name', 'Bandung Warriors')->first();

        Player::create([
            'name' => 'Rizky Hidayat',
            'position' => 'Striker',
            'number' => 9,
            'salary' => encrypt(15000000), // terenkripsi
            'club_id' => $jakartaUnited->id,
        ]);

        Player::create([
            'name' => 'Fajar Pratama',
            'position' => 'Goalkeeper',
            'number' => 1,
            'salary' => encrypt(12000000),
            'club_id' => $bandungWarriors->id,
        ]);
    }
}   