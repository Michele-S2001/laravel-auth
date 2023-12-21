<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $new_project = new Project();
            $new_project->image = 'https://picsum.photos/id/' . $faker->randomDigit() . '/200/300';
            $new_project->description = $faker->paragraph(4);
            $new_project->title = $faker->words(4, true);
            $new_project->save();
        }
    }
}
