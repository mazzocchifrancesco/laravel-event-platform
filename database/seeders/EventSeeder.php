<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Generator as Faker;

class EventSeeder extends Seeder
{
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {
            $nuovoEvento = new Event();
            $nuovoEvento->name = $faker->sentence(2);
            $nuovoEvento->description = $faker->paragraph(2);
            $nuovoEvento->image = $faker->imageUrl(640, 480, 'event', true);
            $nuovoEvento->event_date = $faker->dateTime();
            $nuovoEvento->organizer = $faker->firstName() . " " . $faker->lastName();
            $nuovoEvento->available_tickets = $faker->numberBetween(100, 800);
            $nuovoEvento->save();
        }
    }
}
