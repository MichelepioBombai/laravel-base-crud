<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Artist;
use Faker\Generator as Faker;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i = 0; $i < 25; $i++) {
          $Artist = new Artist;
          $Artist->author = $faker->word();
          $Artist->poster = 'https://picsum.photos/200/300';
          $Artist->title = $faker->word();
          $Artist->album = $faker->words(3, true);
          $Artist->length = $faker->randomFloat(1, 3, 5);
          
          $Artist->save();
      }
    }
}