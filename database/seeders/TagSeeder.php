<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {
            $nuovoTag = new Tag();
            $nuovoTag->name = $faker->sentence(2);
            $nuovoTag->description = $faker->paragraph(2);
            $nuovoTag->image = $faker->imageUrl(640, 480, 'event', true);
            $nuovoTag->save();
        }
    }
}
