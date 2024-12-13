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
            'category' => 'LCA',
            'path' => 'uploads/gallerys/gambar-1.png',
            'title' => 'galeri 1',
            'description' => 'Galeri 1 adalah galeri 1',
        ]);

        Gallery::Create([
            'category' => 'LCA',
            'path' => 'uploads/gallerys/gambar-2.png',
            'title' => 'galeri 2',
            'description' => 'Galeri 2 adalah galeri 2',
        ]);

        Gallery::Create([
            'category' => 'LCA',
            'path' => 'uploads/gallerys/gambar-3.png',
            'title' => 'galeri 3',
            'description' => 'Galeri 3 adalah galeri 3',
        ]);

        Gallery::Create([
            'category' => 'Gallery',
            'path' => 'uploads/gallerys/gambar-1.png',
            'title' => 'galeri 1',
            'description' => 'Galeri 1 adalah galeri 1',
        ]);

        Gallery::Create([
            'category' => 'Gallery',
            'path' => 'uploads/gallerys/gambar-2.png',
            'title' => 'galeri 2',
            'description' => 'Galeri 2 adalah galeri 2',
        ]);

        Gallery::Create([
            'category' => 'Gallery',
            'path' => 'uploads/gallerys/gambar-3.png',
            'title' => 'galeri 3',
            'description' => 'Galeri 3 adalah galeri 3',
        ]);
    }
}
