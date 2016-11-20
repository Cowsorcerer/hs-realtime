<?php

use Illuminate\Database\Seeder;
use App\Division;
use App\Hero;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $heroes = [
            ['shaman' =>
                [
                    'image' => 'images/divisions/shaman/Morgl_the_Oracle.png',
                    'division_id' => Division::get('shaman')->id,
                    'name' => 'Morgl',
                    'surname' => 'the Oracle',
                    'gender' => 'male',
                    'race' => 'Murloc'
                ],
                [
                    'image' => 'images/divisions/shaman/Thrall.png',
                    'division_id' => Division::get('shaman')->id,
                    'name' => 'Thrall',
                    'surname' => 'Son of Durotan',
                    'gender' => 'male',
                    'race' => 'Orc'
                ]
            ],
            ['rogue' =>
                [
                    'image' => 'images/divisions/rogue/Valeera_Sanguinar.png',
                    'division_id' => Division::get('rogue')->id,
                    'name' => 'Valeera',
                    'surname' => 'Sanguinar',
                    'gender' => 'female',
                    'race' => 'Blood elf'
                ],
            ],
            ['paladin' =>
                [
                    'image' => 'images/divisions/paladin/Uther_Lightbringer.png',
                    'division_id' =>  Division::get('paladin')->id,
                    'name' => 'Uther',
                    'surname' => 'Lightbringer',
                    'gender' => 'male',
                    'race' => 'Human'
                ],
                [
                    'image' => 'images/divisions/paladin/Lady_Liadrin.png',
                    'division_id' =>  Division::get('paladin')->id,
                    'name' => 'Lady',
                    'surname' => 'Liadrin',
                    'gender' => 'female',
                    'race' => 'Blood elf'
                ],
            ],
            ['warlock' =>
                [
                    'image' => 'images/divisions/warlock/Guldan.png',
                    'division_id' =>  Division::get('warlock')->id,
                    'name' => 'Guldan',
                    'surname' => '',
                    'gender' => 'male',
                    'race' => 'Orc'
                ],
            ],
            ['priest' =>
                [
                    'image' => 'images/divisions/priest/Anduin_Wrynn.png',
                    'division_id' =>  Division::get('priest')->id,
                    'name' => 'Anduin',
                    'surname' => 'Wrynns',
                    'gender' => 'male',
                    'race' => 'Human'
                ],
                [
                    'image' => 'images/divisions/priest/Tyrande_Whisperwind.png',
                    'division_id' =>  Division::get('priest')->id,
                    'name' => 'Tyrande',
                    'surname' => 'Whisperwind',
                    'gender' => 'female',
                    'race' => 'Night elf'
                ],
            ],
            ['warrior' =>
                [
                    'image' => 'images/divisions/warrior/Garrosh_Hellscream.png',
                    'division_id' =>  Division::get('warrior')->id,
                    'name' => 'Garrosh',
                    'surname' => 'Hellscream',
                    'gender' => 'male',
                    'race' => 'Orc'
                ],
                [
                    'image' => 'images/divisions/warrior/Magni_Bronzebeard.png',
                    'division_id' =>  Division::get('warrior')->id,
                    'name' => 'Magni',
                    'surname' => 'Bronzebeard',
                    'gender' => 'male',
                    'race' => 'Dwarf'
                ],
            ],
            ['mage' =>
                [
                    'image' => 'images/divisions/mage/Jaina_Proudmoore.png',
                    'division_id' =>  Division::get('mage')->id,
                    'name' => 'Jaina',
                    'surname' => 'Proudmoore',
                    'gender' => 'female',
                    'race' => 'human'
                ],
                [
                    'image' => 'images/divisions/mage/Khadgar.png',
                    'division_id' =>  Division::get('mage')->id,
                    'name' => 'Khadgar',
                    'surname' => '',
                    'gender' => 'male',
                    'race' => 'human'
                ],
                [
                    'image' => 'images/divisions/mage/Medivh.png',
                    'division_id' =>  Division::get('mage')->id,
                    'name' => 'Medivh',
                    'surname' => '',
                    'gender' => 'male',
                    'race' => 'human'
                ],
            ],
            ['hunter' =>
                [
                    'image' => 'images/divisions/hunter/Rexxar.png',
                    'division_id' =>  Division::get('hunter')->id,
                    'name' => 'Rexxar',
                    'surname' => '',
                    'gender' => 'male',
                    'race' => 'orc'
                ],
                [
                    'image' => 'images/divisions/hunter/Alleria_Windrunner.png',
                    'division_id' =>  Division::get('hunter')->id,
                    'name' => 'Alleria',
                    'surname' => 'Windrunner',
                    'gender' => 'female',
                    'race' => 'High elf'
                ],
            ],
            ['druid' =>
                [
                    'image' => 'images/divisions/druid/Malfurion_Stormrage.png',
                    'division_id' =>  Division::get('druid')->id,
                    'name' => 'Malfurion',
                    'surname' => 'Stormrage',
                    'gender' => 'male',
                    'race' => 'Night elf'
                ]
            ]
        ];

        foreach($heroes as $hero) {
            foreach($hero as $details) {
                Hero::create($details);
            }
        }
    }
}
