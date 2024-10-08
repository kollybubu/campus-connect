<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolesWithPositions = [
            ['name' => 'admin', 'position' => 'headmaster'],
            ['name' => 'faculty', 'position' => 'teacher'],
            ['name' => 'student', 'position' => 'student']
        ];

        foreach($rolesWithPositions as $data)
        {
            Role::create([
                'name' => $data['name'],
                'position' => $data['position']
            ]);
        }
    }
}
