<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DatabaseAdminSeeder::class,
            DatabaseConfigurationSeeder::class,
            DatabaseSliderSeeder::class,
            DatabaseAboutUsSeeder::class,
            DatabaseSuperioritySeeder::class,
            DatabaseWhyUsSeeder::class,
            DatabaseCategoryServiceSeeder::class,
            DatabaseServiceSeeder::class,
            DatabaseGallerySeeder::class,
            DatabasePartnerSeeder::class,
            DatabaseCategoryBlogSeeder::class,
            DatabaseBlogSeeder::class,
            DatabaseTestimonialSeeder::class,
            DatabaseTeamSeeder::class,
        ]);
    }
}
