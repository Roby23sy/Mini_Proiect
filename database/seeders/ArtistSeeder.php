<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = array('star', 'writer', 'director');

        DB::table('artists')->insert([
            'name' => Str::random(10),
            'title' => array_rand($titles , 1)
        ]);
    }
}
