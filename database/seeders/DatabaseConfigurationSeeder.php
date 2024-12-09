<?php

namespace Database\Seeders;

use App\Models\admin\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Configuration::Create([
            'path' => 'uploads/configuration/gambar-1.png',
            'path_logo' => 'uploads/configuration/gambar-1.png',
            'website_name' => 'Nama Web',
            'title' => 'Judul',
            'meta_keywords' => 'meta Keywords',
            'meta_descriptions' => 'meta description',
            'footer' => 'footer',
        ]);
    }
}
