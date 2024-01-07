<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData = [
            'name'=>'admin',
            'email'=>'admin@mail.com',
            'password'=>bcrypt('admin')
        ];

        $admin = User::firstOrCreate(['email'=>$adminData['email']], $adminData);

        UserRole::where('user_id', '=', $admin->id)->delete();
        $adminRoles = [
            [
                'user_id'=>$admin->id,
                'role_id'=>Role::where('name', '=', 'admin')->first()->id
            ],
            [
                'user_id'=>$admin->id,
                'role_id'=>Role::where('name', '=', 'reader')->first()->id
            ]
        ];

        foreach ($adminRoles as $ar)
        {
            UserRole::firstOrCreate(['user_id'=>$ar['user_id'], 'role_id'=>$ar['role_id']]);
        }
    }
}
