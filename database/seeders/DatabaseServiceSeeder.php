<?php

namespace Database\Seeders;

use App\Models\admin\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::Create([
            'path' => 'uploads/services/gambar-1.png',
            'title' => 'Judul',
            'overview' => 'Ringkasan',
            'description' => 'Deskripsi',
            'category_id' => '1',
        ]);

        Service::Create([
            'path' => 'uploads/services/gambar-2.png',
            'title' => 'Judul 2',
            'overview' => 'Ringkasan 2',
            'description' => 'Deskripsi 2',
            'category_id' => '2',
        ]);

        Service::Create([
            'path' => 'uploads/services/gambar-3.png',
            'title' => 'Judul 3',
            'overview' => 'Ringkasan 3',
            'description' => 'Deskripsi 3',
            'category_id' => '3',
        ]);
    }
}
