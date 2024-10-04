<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_users = [
            ['user_id' => 7, 'project_id' => 1],
            ['user_id' => 7, 'project_id' => 2],
            ['user_id' => 8, 'project_id' => 1],
            ['user_id' => 8, 'project_id' => 3],
            ['user_id' => 9, 'project_id' => 2],
            ['user_id' => 9, 'project_id' => 3],
            ['user_id' => 10, 'project_id' => 1],
            ['user_id' => 10, 'project_id' => 4],
            ['user_id' => 11, 'project_id' => 2],
            ['user_id' => 11, 'project_id' => 5],
            ['user_id' => 12, 'project_id' => 3],
            ['user_id' => 12, 'project_id' => 4],
            ['user_id' => 13, 'project_id' => 1],
            ['user_id' => 13, 'project_id' => 2],
            ['user_id' => 14, 'project_id' => 5],
            ['user_id' => 15, 'project_id' => 4],
            ['user_id' => 16, 'project_id' => 3],
            ['user_id' => 17, 'project_id' => 2],
            ['user_id' => 18, 'project_id' => 1],
            ['user_id' => 19, 'project_id' => 5],
            ['user_id' => 20, 'project_id' => 4],
            ['user_id' => 21, 'project_id' => 3],
            ['user_id' => 22, 'project_id' => 2],
            ['user_id' => 23, 'project_id' => 5],
            ['user_id' => 24, 'project_id' => 1],
            ['user_id' => 25, 'project_id' => 2],
        ];
        
        DB::table('project_users')->insert($project_users);
    }
}
