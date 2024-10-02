<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutSection::create([
            'title' => 'Our Education System Inspires You More.',
            'description' => 'There are many variations of passages available but the majority have suffered alteration in some form by injected humour randomised words which don\'t look even slightly believable.',
            'image' => 'about_images/dummy-image.jpg', // Store a dummy image path
            'services' => '<ul><li>Education Services</li><li>International Hubs</li></ul>',
            'quote' => 'It is a long established fact that a reader will be distracted by the content of a page when looking at its reader for the long words layout.',
        ]);
    }
}
