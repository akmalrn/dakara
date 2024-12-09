<?php

namespace Database\Seeders;

use App\Models\admin\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseWhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyUs::Create([
            'title' => 'Judul',
            'description' => 'deskripsi',
        ]);
    }
}
