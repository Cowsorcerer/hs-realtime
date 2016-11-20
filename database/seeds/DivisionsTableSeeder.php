<?php

use Illuminate\Database\Seeder;
use App\Division;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            [
                'title' => 'shaman',
                'hero_power' => 'Totemic Call'
            ],
            [
                'title' => 'warlock',
                'hero_power' => 'Life Tap'
            ],
            [
                'title' => 'priest',
                'hero_power' => 'Lesser Heal'
            ],
            [
                'title' => 'rogue',
                'hero_power' => 'Dagger Mastery'
            ],
            [
                'title' => 'warrior',
                'hero_power' => 'Armor Up!'
            ],
            [
                'title' => 'mage',
                'hero_power' => 'Fireblast'
            ],
            [
                'title' => 'druid',
                'hero_power' => 'Shapeshift'
            ],
            [
                'title' => 'hunter',
                'hero_power' => 'Steady Shot'
            ],
            [
                'title' => 'paladin',
                'hero_power' => 'Reinforce'
            ]
        ];

        foreach($divisions as $division) {
            Division::create($division);
        }
    }
}
