<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::insert([
            ['name' => 'Andrea Hirata', 'photo' => '', 'bio' => 'Penulis Laskar Pelangi'],
            ['name' => 'Tere Liye', 'photo' => '', 'bio' => 'Penulis novel populer'],
            ['name' => 'Pramoedya', 'photo' => '', 'bio' => 'Sastrawan Indonesia'],
            ['name' => 'Habiburrahman', 'photo' => '', 'bio' => 'Penulis religi'],
            ['name' => 'Raditya Dika', 'photo' => '', 'bio' => 'Penulis komedi'],
        ]);
    }
}
