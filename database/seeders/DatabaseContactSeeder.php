<?php

namespace Database\Seeders;

use App\Models\admin\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        contact::Create([
            'phone_number' => '6281314226989',
            'phone_number_2' => '6285871140912',
            'phone_number_3' => '6281218670223',
            'email_address' => 'info@dakara-lcaindonesia.com',
            'email_address' => 'marketing@dakara-lcaindonesia.com',
            'address' => 'Jl. Raya Lingkar Dramaga-IPB Bogor No.09, RT 05/01 Dramaga Pertokoan Ruko Samping Drama Cantik-Bogor Jawa Barat 16610',
            'map' => '-',
            'youtube' => 'https://www.youtube.com/channel/UCvP2ffuejs7_a5RExSKYL5g',
            'facebook' => 'https://www.facebook.com/dakara.dakara.1848',
            'instagram' => 'https://www.instagram.com/dakaraconsulting.id',
        ]);
    }
}
