<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Daw Mya Myint Zu',
                'email' => 'myintzu@gmail.com',
                'password' => 'password',
                'phone' => '09796937456',
                'address' => 'Bahan',
            ],
            [
                'name' => 'U Kyaw San Win',
                'email' => 'sanwin@gmail.com',
                'password' => 'password',
                'phone' => '09451234567',
                'address' => 'Insein',
            ],
            [
                'name' => 'U Min Thu Khant',
                'email' => 'khantthu@gmail.com',
                'password' => 'password',
                'phone' => '09123456789',
                'address' => 'Hlaing',
            ],
            [
                'name' => 'Daw Mi Tin Zar Kyaw',
                'email' => 'zarkyaw@gmail.com',
                'password' => 'password',
                'phone' => '09776543210',
                'address' => 'Tamwe',
            ],
            [
                'name' => 'Daw Khin May Thu',
                'email' => 'maythu@gmail.com',
                'password' => 'password',
                'phone' => '09876543210',
                'address' => 'Sanchaung',
            ],
            [
                'name' => 'U Zay Yar Naing',
                'email' => 'zaynaing@gmail.com',
                'password' => 'password',
                'phone' => '09876543210',
                'address' => 'Sanchaung',
            ],
            [
                'name' => 'U Sit Min Htet',
                'email' => 'minhtet@gmail.com',
                'password' => 'password',
                'phone' => '09876543210',
                'address' => 'Sanchaung',
            ],
            [
                'name' => 'U Khant Nyar',
                'email' => 'susu@gmail.com',
                'password' => 'password',
                'phone' => '09876543210',
                'address' => 'Sanchaung',
            ],
        ];
        
        foreach($teachers as $teacher)
        {
            $user = User::create($teacher);
            $user->assignRole('faculty');
        }
    }
}
