<?php

namespace Database\Seeders;

use App\Models\admin\nav\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::Create([
            'path' => 'uploads/profile/Profile.png'
        ]);
    }
}
