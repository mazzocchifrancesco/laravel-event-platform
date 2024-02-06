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

        $array_events = config("events");

        foreach ($array_events as $event_item) {
            $nuovoEvento = new Event();
            $nuovoEvento->name = $event_item["name"];
            $nuovoEvento->description = $event_item["description"];
            $nuovoEvento->image = $event_item["image"];
            $nuovoEvento->event_date = $event_item["event_date"];
            $nuovoEvento->organizer = $event_item["organizer"];
            $nuovoEvento->location = $event_item["location"];
            $nuovoEvento->available_tickets = $event_item["available_tickets"];
            $nuovoEvento->user_id = $event_item["user_id"];
            $nuovoEvento->save();
        }
    }
}
