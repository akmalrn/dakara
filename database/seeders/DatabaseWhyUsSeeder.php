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
            'title' => 'PT. DAKARA CONSULTING LCA INDONESIA',
            'description' => 'PT. DAKARA CONSULTING LCA INDONESIA is engaged in environmental services and consulting. In addition to carrying out various training, such as Life Cycle Assessment (LCA) PROPER, Renewable Energy, Training of Heat Exchanger and Radiator, Training of Life Cycle Assessment (TolLCA), Training of Energy Audit, Training of Agricultural Engineering, Training of Bio energy, Training of Jurnal Editor, and Palm Oil Mill.',
            'path' => 'uploads/why-us/logo-no.png'
        ]);
    }
}
