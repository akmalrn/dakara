<?php

namespace Database\Seeders;

use App\Models\admin\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabasePartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::Create([
            'path' => 'uploads/partners/dakara.png',
            'title' => 'dakara',
            'link' => 'http://www.dakara-consulting.com/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/ilcan.png',
            'title' => 'ilcan',
            'link' => 'https://www.ilcan.or.id/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/ipb.png',
            'title' => 'IPB',
            'link' => 'https://dakara-lcaindonesia.com/dev/ipb.ac.id',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/kpc.png',
            'title' => 'KPC',
            'link' => 'http://www.kpc.co.id/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/kti.png',
            'title' => 'KTI',
            'link' => 'http://www.kti.co.id/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mhucoal.png',
            'title' => 'mhucoal',
            'link' => 'http://mhucoal.co.id/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/msd.png',
            'title' => 'msd',
            'link' => 'http://www.msd.com/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/pertamina.png',
            'title' => 'pertamina',
            'link' => 'https://www.pertamina.com/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/vale.gif',
            'title' => 'vale',
            'link' => 'http://www.vale.com/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/timah.png',
            'title' => 'timah',
            'link' => 'http://www.timah.com/',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/pt.semen.png',
            'title' => 'pt.semen',
            'link' => 'https://semenbaturaja.co.id//',
        ]);
    }
}
