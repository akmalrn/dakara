<?php

namespace Database\Seeders;

use App\Models\admin\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::Create([
            'path' => 'uploads/sliders/gambar-1.png',
            'title' => 'judul',
            'overview' => 'ringkasan',
            'description' => 'deskripsi',
        ]);

        Slider::Create([
            'path' => 'uploads/sliders/gambar-2.png',
            'title' => 'judul 2',
            'overview' => 'ringkasan 2',
            'description' => 'deskripsi 2',
        ]);

        Slider::Create([
            'path' => 'uploads/sliders/gambar-3.png',
            'title' => 'judul 3',
            'overview' => 'ringkasan 3',
            'description' => 'deskripsi 3',
        ]);
    }
}
