<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hats = new Award();
        $hats->type = 'T-shirt';
        $hats->quantity = 40;
        $hats->save();

        $tShirt = new Award();
        $tShirt->type = 'Metal Flusk';
        $tShirt->quantity = 25;
        $tShirt->save();

        $glasess = new Award();
        $glasess->type = 'Cooler';
        $glasess->quantity = 10;
        $glasess->save();

    }
}
