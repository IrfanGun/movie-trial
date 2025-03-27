<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
           
                'username'=>'aldmic',
                'name'=>'aldmic',
                'email'=>'aldmic@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123abc123')
            

        ];

        User::create($user);
    }
}
