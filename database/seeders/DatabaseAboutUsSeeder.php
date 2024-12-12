<?php

namespace Database\Seeders;

use App\Models\admin\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseAboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::Create([
            'path' => 'uploads/aboutus/about.png',
            'title' => 'Apa itu Life Cycle Assessment (LCA) ?',
            'overview' => 'Life cycle assessment (LCA) is applied to measure the impact of a process of production of goods and services on the environment. In the LCA framework, all stages in the product life cycle are considered.',
            'description' => '<p>The application of LCA in PROPER began with the issuance of the PerDirjen PPKL No. P14/PPKL/SET/DIK.0/9/2018 and revision of PerMen No.3 of 2014. This determination was made to : (i) encourage companies to comply with laws and regulations through reputational incentives and disincentives, and (ii) encourage companies with good environmental performance to implement cleaner production and future plan in carrying out sustainable development. In other words, LCA can be a form of improvement from AMDAL in quantifying impacts on the environment.</p><p>When compared to PROPER, LCA itself can conduct a thorough assessment of the production process for each production unit. By conducting LCA, the energy and water consumption of each production unit can be identified, so that waste can be identified in detail which can come from a particular process unit. The impact on many categories of environmental damage can also be known by LCA analysis. A thorough and detailed assessment is an advantage of the LCA itself. In the end, this LCA method produces an EPD (Environmental Product Declaration) as Ecolabel III which can increase the selling value of the product so that it will bring profits to the company. </p>',
        ]);
    }
}
