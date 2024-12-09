<?php

namespace Database\Seeders;

use App\Models\admin\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabasePartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::Create([
            'path' => 'uploads/partners/gambar-1.png',
            'title' => 'judul',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/gambar-2.png',
            'title' => 'judul 2',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/gambar-3.png',
            'title' => 'judul 3',
        ]);
    }
}
