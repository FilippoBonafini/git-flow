<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0 ;$i<50 ; $i++){

        $newBook = new Book();
        $newBook->title = $faker-> sentence(2);
        $newBook->author = $faker-> name();
        $newBook->pages = $faker-> numberBetween(80,1000);
        $newBook->genre = $faker-> randomElement(['Fiction', 'Non-fiction', 'Science', 'Horror', 'Romance']);
        $newBook->description= $faker-> paragraph();
        $newBook->price = $faker-> randomFloat(2, 10, 100);
        $newBook->save();
        }
    }
}
