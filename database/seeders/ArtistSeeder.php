<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Artist;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Artist = new Artist;
        $Artist->author = 'salmo';
        $Artist->poster = 'https://picsum.photos/200/300';
        $Artist->title = '1984';
        $Artist->album = 'hellvisback';
        $Artist->length = 3.35;
        
        $Artist->save();
    }
}