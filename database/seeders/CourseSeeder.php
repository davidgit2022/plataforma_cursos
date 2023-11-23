<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Laravel',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim earum, eius est iure odio consectetur eligendi consequuntur soluta nostrum doloribus doloremque, magni aspernatur obcaecati adipisci eaque! Maiores voluptate nobis saepe?',
            'price' => 89.999,
            'image' => ''
        ]);

        Course::create([
            'title' => 'JavaScript',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim earum, eius est iure odio consectetur eligendi consequuntur soluta nostrum doloribus doloremque, magni aspernatur obcaecati adipisci eaque! Maiores voluptate nobis saepe?',
            'price' => 99.999,
            'image' => ''
        ]);

        Course::create([
            'title' => 'PHP',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim earum, eius est iure odio consectetur eligendi consequuntur soluta nostrum doloribus doloremque, magni aspernatur obcaecati adipisci eaque! Maiores voluptate nobis saepe?',
            'price' => 79.999,
            'image' => ''
        ]);

        Course::factory()->count(20)->create();
    }
}
