<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->azienda = $faker->word(true);
            $train->stazione_partenza = $faker->words(3, true);
            $train->stazione_arrivo = $faker->words(3, true);
            $train->orario_partenza = $faker->date('Y-m-d H:i:s');
            $train->orario_arrivo = $faker->date('Y-m-d H:i:s');
            $train->codice_treno = $faker->numberBetween(1, 10000);
            $train->numero_carrozze = $faker->numberBetween(5, 10);
            $train->is_delayed = $faker->boolean(10);
            $train->is_deleted = $faker->boolean(5);
            $train->save();
        }
    }
}
