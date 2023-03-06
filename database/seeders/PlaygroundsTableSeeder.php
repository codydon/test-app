<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Playground;

class PlaygroundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $playgrounds = [
            [
                'preferences' => 'Swings, slides',
            ],
            [
                'preferences' => 'Basketball court, soccer field',
            ],
            [
                'preferences' => 'Tennis court, running track',
            ],
        ];

        foreach ($playgrounds as $playground) {
            Playground::create($playground);
        }
    }
}
