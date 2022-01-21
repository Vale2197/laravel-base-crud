<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i=0; $i < 30; $i++) { 
            # code...
            $game = new Game();
            $game->title = $faker->words(3, true);
            $game->image = $faker->image();
            $game->description = $faker->sentence();
            $game->save();
            
        }

    }
}
