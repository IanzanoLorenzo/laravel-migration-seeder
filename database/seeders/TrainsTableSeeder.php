<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $stazioni = ['Torino Porta Nuova', 'Milano Centrale', 'Venezia Santa Lucia', 'Bologna Centrale', 'Torino Porta Susa', 'Firenze', 'Napoli Centrale', 'Foggia', 'Lambrate', 'Susa', 'San Severo'];
        $aziende = ['Trenitalia', 'Italo', 'Booltrains'];

        for($i = 0; $i < 10; $i++){
            $train = new Train();
            $train->azienda = $aziende[$faker->numberBetween(0, count($aziende) - 1)];;
            $train->stazione_di_partenza = $stazioni[$faker->numberBetween(0, count($stazioni) - 1)];
            $train->stazione_di_arrivo = $stazioni[$faker->numberBetween(0, count($stazioni) - 1)];
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->numerify('######');
            $train->numero_carrozze = $faker->numberBetween(8, 14);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean(); 
            $train->delay = $train->in_orario ? 0 : $faker->time('0:i:0');
            $train->data_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            
            $train->save();
        }


    }
}