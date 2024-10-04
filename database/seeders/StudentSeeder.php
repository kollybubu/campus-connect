<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'Kyaw Kyaw',
                'email' => 'kyawkyaw@gmail.com',
                'password' => 'password',
                'phone' => '09612345678',
                'address' => 'Mayangone',
            ],
            [
                'name' => 'Tun Tun',
                'email' => 'tuntun@gmail.com',
                'password' => 'password',
                'phone' => '09234567890',
                'address' => 'South Okkalapa',
            ],
            [
                'name' => 'Shwe Yee',
                'email' => 'shweyee@gmail.com',
                'password' => 'password',
                'phone' => '09432109876',
                'address' => 'Hledan',
            ],
            [
                'name' => 'Thiri Thiri',
                'email' => 'thirithiri@gmail.com',
                'password' => 'password',
                'phone' => '09712398765',
                'address' => 'Thingangyun',
            ],
            [
                'name' => 'Min Min',
                'email' => 'minmin@gmail.com',
                'password' => 'password',
                'phone' => '09567890123',
                'address' => 'Dagon',
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => 'password',
                'phone' => '09712345678',
                'address' => '123 Main St, Springfield',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'password' => 'password',
                'phone' => '09723456789',
                'address' => '456 Elm St, Springfield',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alicejohnson@example.com',
                'password' => 'password',
                'phone' => '09734567890',
                'address' => '789 Oak St, Springfield',
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bobbrown@example.com',
                'password' => 'password',
                'phone' => '09745678901',
                'address' => '321 Pine St, Springfield',
            ],
            [
                'name' => 'Charlie White',
                'email' => 'charliewhite@example.com',
                'password' => 'password',
                'phone' => '09756789012',
                'address' => '654 Cedar St, Springfield',
            ],
            [
                'name' => 'David Green',
                'email' => 'davidgreen@example.com',
                'password' => 'password',
                'phone' => '09767890123',
                'address' => '987 Birch St, Springfield',
            ],
            [
                'name' => 'Emma Blue',
                'email' => 'emmablue@example.com',
                'password' => 'password',
                'phone' => '09778901234',
                'address' => '234 Maple St, Springfield',
            ],
            [
                'name' => 'Frank Black',
                'email' => 'frankblack@example.com',
                'password' => 'password',
                'phone' => '09789012345',
                'address' => '876 Walnut St, Springfield',
            ],
            [
                'name' => 'Grace Yellow',
                'email' => 'graceyellow@example.com',
                'password' => 'password',
                'phone' => '09790123456',
                'address' => '543 Spruce St, Springfield',
            ],
            [
                'name' => 'Henry Orange',
                'email' => 'henryorange@example.com',
                'password' => 'password',
                'phone' => '09701234567',
                'address' => '678 Fir St, Springfield',
            ],
            [
                'name' => 'Ivy Purple',
                'email' => 'ivypurple@example.com',
                'password' => 'password',
                'phone' => '09712345012',
                'address' => '321 Chestnut St, Springfield',
            ],
            [
                'name' => 'Jack Gray',
                'email' => 'jackgray@example.com',
                'password' => 'password',
                'phone' => '09723456123',
                'address' => '456 Maple Ave, Springfield',
            ],
            [
                'name' => 'Kathy Silver',
                'email' => 'kathysilver@example.com',
                'password' => 'password',
                'phone' => '09734567234',
                'address' => '789 Oak Blvd, Springfield',
            ],
            [
                'name' => 'Liam Gold',
                'email' => 'liamgold@example.com',
                'password' => 'password',
                'phone' => '09745678345',
                'address' => '123 Pine Rd, Springfield',
            ],
            [
                'name' => 'Mia Bronze',
                'email' => 'miabronze@example.com',
                'password' => 'password',
                'phone' => '09756789456',
                'address' => '456 Cedar Ct, Springfield',
            ],
            [
                'name' => 'Noah Steel',
                'email' => 'noahsteel@example.com',
                'password' => 'password',
                'phone' => '09767890567',
                'address' => '789 Birch Pl, Springfield',
            ],
            [
                'name' => 'Olivia Copper',
                'email' => 'oliviacopper@example.com',
                'password' => 'password',
                'phone' => '09778901678',
                'address' => '234 Maple Way, Springfield',
            ],
            [
                'name' => 'Paul Tin',
                'email' => 'paultin@example.com',
                'password' => 'password',
                'phone' => '09789012789',
                'address' => '567 Spruce Dr, Springfield',
            ],
            [
                'name' => 'Quinn Zinc',
                'email' => 'quinnzinc@example.com',
                'password' => 'password',
                'phone' => '09790123890',
                'address' => '890 Fir St, Springfield',
            ],
        ];
        
        
        foreach($students as $student)
        {
            $user = User::create($student);
            $user->assignRole('student');
        }
    }
}
