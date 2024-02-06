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
        $array_tags = config("tags");

        foreach ($array_tags as $tag_item) {
            $nuovoTag = new Tag();
            $nuovoTag->name = $tag_item["name"];
            $nuovoTag->description = $tag_item["description"];
            $nuovoTag->image = $tag_item["image"];
            $nuovoTag->save();
        }
    }
}
