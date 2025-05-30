<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeds que deve rodar em produção
        if(App::environment() === 'production') {
            $this->call([
                StatusSeeder::class,
                UserSeeder::class,
                CourseStatusSeeder::class,
            ]);
        }

        // Seeds que deve rodar em qualquer ambiente
        if(App::environment() !== 'production') {
            $this->call([
                StatusSeeder::class,
                UserSeeder::class,
                CourseStatusSeeder::class,
                CourseSeeder::class,
                CourseBatchSeeder::class,
                ModuleSeeder::class,
                LessonSeeder::class,
            ]);
        }
    }
}
