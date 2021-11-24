<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample Penulis
        $author1 = Author::create(['name' => 'Erlan Metaka']);
        $author2 = Author::create(['name' => 'Via Nirwana']);
        $author3 = Author::create(['name' => 'Febby Nurfitriyani']);

        //Sample buku
        $book1 = Book::create(['title' => 'Konspirasi Dunia', 'amount' => 3, 'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Skuy Living', 'amount' => 2, 'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Bergelut dengan Birahi', 'amount' => 4, 'author_id' => $author3->id]);
        $book4 = Book::create(['title' => 'Terjebak dengan fantasi', 'amount' => 3, 'author_id' => $author1->id]);
    }
}
