<?php

namespace Database\Seeders;

use App\Models\admin\CategoryBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseCategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryBlog::Create([
            'category' => 'Berita',
        ]);

        CategoryBlog::Create([
            'category' => 'Berita 2',
        ]);

        CategoryBlog::Create([
            'category' => 'Berita 3',
        ]);
    }
}
