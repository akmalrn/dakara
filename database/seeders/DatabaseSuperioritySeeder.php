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
            'path' => 'uploads/superioritys/keunggulan-1.svg',
            'title' => 'Handled professionally.',
            'description' => 'deskripsi',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/keunggulan-2.svg',
            'title' => 'Trainers and Consultants who are experts in their fields.',
            'description' => 'deskripsi 2',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/keunggulan-3.svg',
            'title' => 'The resulting report can be used as a recommendation to improve the companys environmental performance.',
            'description' => 'deskripsi 3',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/keunggulan-4.svg',
            'title' => 'Have competence as a consultant in conducting LCA studies in a company.',
            'description' => 'deskripsi 3',
        ]);
    }
}
