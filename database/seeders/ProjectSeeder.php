<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Project;
use App\Models\Type;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // recupero i type anche qui per associarli ai project
        $types = Type::all();

        $projects = config('projects');

        foreach ($projects as $projectData) {
            Project::create([
                'name' => $projectData['name'],
                'description' => $projectData['description'],
                'slug' => Helper::generateSlug($projectData['name'], Project::class),
                'type_id' => $types->random()->id,
            ]);
        }
    }
}
