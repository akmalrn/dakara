<?php

namespace Database\Seeders;

use App\Models\admin\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::Create([
            'path' => 'uploads/gallerys/gambar-1.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gambar-2.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gambar-3.png',
        ]);
    }
}
