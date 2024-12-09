<?php

namespace Database\Seeders;

use App\Models\admin\Superiority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSuperioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superiority::Create([
            'path' => 'uploads/superioritys/gambar-1.png',
            'title' => 'Judul',
            'description' => 'deskripsi',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/gambar-2.png',
            'title' => 'Judul 2',
            'description' => 'deskripsi 2',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/gambar-3.png',
            'title' => 'Judul 3',
            'description' => 'deskripsi 3',
        ]);
    }
}
