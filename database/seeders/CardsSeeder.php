<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Card::create([
        'name' => 'Drone JR',
        'prize' => '12'
      ]);
      Card::create([
        'name' => 'Stealth Army',
        'prize' => '15'
      ]);
      Card::create([
        'name' => 'Chunky Boy',
        'prize' => '13'
      ]);
      Card::create([
        'name' => 'Sky Walkers',
        'prize' => '18'
      ]);
    }
}
