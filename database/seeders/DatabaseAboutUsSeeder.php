<?php

namespace Database\Seeders;

use App\Models\admin\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseAboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::Create([
            'path' => 'uploads/aboutus/gambar-1.png',
            'title' => 'Judul',
            'overview' => 'Ringkasan',
            'description' => 'Deskripsi',
        ]);
    }
}
