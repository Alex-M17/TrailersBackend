<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class trailersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trailers')->truncate();

        DB::table('trailers')->insert([
            'title' => 'Avengers: Endgame',
            'year' => '2019',
            'genero' => 'Ciencia Ficción',
            'imgUrl' => 'https://wallpapercave.com/wp/wp3891762.jpg',
            'url' => 'https://www.youtube.com/watch?v=PyakRSni-c0'
        ]);

        DB::table('trailers')->insert([
            'title' => 'Joker',
            'year' => '2019',
            'genero' => 'Psicologica',
            'imgUrl' => 'https://wallpapercave.com/wp/wp5771379.jpg',
            'url' => 'https://www.youtube.com/watch?v=EIyZqNbZQI8'
        ]);

        DB::table('trailers')->insert([
            'title' => 'Uncut Gems',
            'year' => '2019',
            'genero' => 'Drama',
            'imgUrl' => 'https://wallpapercave.com/wp/wp5845862.jpg',
            'url' => 'https://www.youtube.com/watch?v=vTfJp2Ts9X8'
        ]);

        // ******************************************************** //

        DB::table('trailers')->insert([
            'title' => 'Stranger Things',
            'year' => '2016',
            'genero' => 'Ciencia Ficción',
            'imgUrl' => 'https://wallpapercave.com/wp/wp3855688.jpg',
            'url' => 'https://www.youtube.com/watch?v=mnd7sFt5c3A'
        ]);

        DB::table('trailers')->insert([
            'title' => 'Lucifer',
            'year' => '2016',
            'genero' => 'policíaco',
            'imgUrl' => 'https://wallpapercave.com/wp/wp4406379.jpg',
            'url' => 'https://www.youtube.com/watch?v=X4bF_quwNtw'
        ]);

        DB::table('trailers')->insert([
            'title' => 'La Casa de Papel',
            'year' => '2017',
            'genero' => 'Drama',
            'imgUrl' => 'https://wallpapercave.com/wp/wp4961968.png',
            'url' => 'https://www.youtube.com/watch?v=6zKvzjjgYo0'
        ]);
    }
}
