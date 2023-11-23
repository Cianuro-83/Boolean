<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $project = new Project();
            $project->title = $faker->unique()->sentence($faker->numberBetween(5, 7));
            $project->customer = $faker->name();
            $project->description = $faker->optional()->text(2500);
            $project->url = $faker->optional()->url();
            $project->slug = Str::slug($project->title, '-');
            $project->save();

        }
    }
}