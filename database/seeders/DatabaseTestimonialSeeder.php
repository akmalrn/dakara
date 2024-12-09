<?php

namespace Database\Seeders;

use App\Models\admin\TestimonialClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/gambar-1.png',
            'name' => 'nama',
            'position' => 'ceo',
            'description' => 'Layanannya Sangat Cepat',
        ]);

        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/gambar-2.png',
            'name' => 'nama 2',
            'position' => 'ceo 2',
            'description' => 'Layanannya Sangat Cepat 2',
        ]);

        TestimonialClient::Create([
            'path' => 'uploads/testimonialClients/gambar-3.png',
            'name' => 'nama 3',
            'position' => 'ceo 3',
            'description' => 'Layanannya Sangat Cepat 3',
        ]);
    }
}
