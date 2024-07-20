<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Front End',
            'slug' => 'front-end',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Web Developer',
            'slug' => 'web-developer',
            'color' => 'purpple'
        ]);
    }
}
