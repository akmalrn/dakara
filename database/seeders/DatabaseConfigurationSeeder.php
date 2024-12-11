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
            'path' => 'uploads/configuration/logo-no.png',
            'path_logo' => 'uploads/configuration/logo-no.png',
            'website_name' => 'PT. DAKARA CONSULTING LCA INDONESIA',
            'title' => 'PT. DAKARA CONSULTING LCA INDONESIA',
            'meta_keywords' => 'meta Keywords',
            'meta_descriptions' => 'meta description',
            'footer' => 'footer',
        ]);
    }
}
