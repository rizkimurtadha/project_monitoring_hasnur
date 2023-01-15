<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Rizki Murtadha',
                'email' => 'rizkimurtadha@gmail.com',
                'password' => Hash::make('123456789'),
            ],

        ];
        foreach ($data as $item) {
            $user = User::create($item);
            if ($user->name == "Admin") {
                $user->assignRole('superadmin');
            } else {
                $user->assignRole('user');
            }
        }
    }
}
