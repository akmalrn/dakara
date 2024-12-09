<?php

namespace Database\Seeders;

use App\Models\admin\CategoryService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseCategoryServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryService::Create([
            'category' => 'Layanan 1',
        ]);

        CategoryService::Create([
            'category' => 'Layanan 2',
        ]);

        CategoryService::Create([
            'category' => 'Layanan 3',
        ]);
    }
}
