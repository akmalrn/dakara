<?php

namespace Database\Seeders;

use App\Models\admin\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::Create([
            'path' => 'uploads/blogs/gambar-1.png',
            'title' => 'Judul',
            'overview' => 'Ringkasang',
            'description' => 'deskripsi',
            'keywords' => 'keywords',
            'descriptions' => 'deskripsi',
            'category_id' => '1',
        ]);

        Blog::Create([
            'path' => 'uploads/blogs/gambar-2.png',
            'title' => 'Judul 2',
            'overview' => 'Ringkasang 2',
            'description' => 'deskripsi 2',
            'keywords' => 'keywords 2',
            'descriptions' => 'deskripsi 2',
            'category_id' => '2',
        ]);

        Blog::Create([
            'path' => 'uploads/blogs/gambar-3.png',
            'title' => 'Judul 3',
            'overview' => 'Ringkasang 3',
            'description' => 'deskripsi 3',
            'keywords' => 'keywords 3',
            'descriptions' => 'deskripsi 3',
            'category_id' => '3',
        ]);
    }
}
