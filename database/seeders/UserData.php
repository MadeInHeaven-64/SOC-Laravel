<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'password' => bcrypt('123456'),
                'level' => '1',
                'email' => 'admin@admin.com',
            ],
            [
                'name' => 'User',
                'password' => bcrypt('123456'),
                'level' => '1',
                'email' => 'user@user.com',
            ],
        ];
        foreach($user as $key => $value) {
            User::create($value);
        }
    }

}
