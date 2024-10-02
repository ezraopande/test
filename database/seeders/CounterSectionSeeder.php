<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CounterSection;

class CounterSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert dummy data
        CounterSection::create([
            'icon' => 'counter_icons/course.svg',
            'count' => 500,
            'title' => 'Total Courses',
        ]);

        CounterSection::create([
            'icon' => 'counter_icons/graduation.svg',
            'count' => 1900,
            'title' => 'Our Students',
        ]);

        CounterSection::create([
            'icon' => 'counter_icons/teacher-2.svg',
            'count' => 750,
            'title' => 'Skilled Lecturers',
        ]);

        CounterSection::create([
            'icon' => 'counter_icons/award.svg',
            'count' => 30,
            'title' => 'Win Awards',
        ]);
    }
}
