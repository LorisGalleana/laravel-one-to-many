<?php

namespace Database\Seeders;
use App\Models\Project;
use Faker\Generator as Faker;
use App\Functions\Helper;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {

            $new_project = new Project();
            $new_project->title = $faker->sentence;
            $new_project->slug = Helper::generateSlug($new_project->title, Project::class);
            $new_project->text = $faker->paragraph;
            $new_project->save();
        }
    }
}
