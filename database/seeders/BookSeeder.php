<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Cerita inspiratif',
                'price' => 90000,
                'stock' => 10,
                'author_id' => 1
            ],
            [
                'title' => 'Bumi',
                'description' => 'Novel fantasi',
                'price' => 85000,
                'stock' => 15,
                'author_id' => 2
            ],
            [
                'title' => 'Bumi Manusia',
                'description' => 'Sejarah Indonesia',
                'price' => 95000,
                'stock' => 8,
                'author_id' => 3
            ],
            [
                'title' => 'Ayat Ayat Cinta',
                'description' => 'Religi',
                'price' => 88000,
                'stock' => 12,
                'author_id' => 4
            ],
            [
                'title' => 'Kambing Jantan',
                'description' => 'Komedi',
                'price' => 70000,
                'stock' => 20,
                'author_id' => 5
            ],
        ]);
    }
}
