<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'user',
                'email'=> 'user@gmail.com',
                'role'=> 'user',
                'password'=> bcrypt('123456')
            ],
            [
                'name' => 'dokter',
                'email'=> 'dokter@gmail.com',
                'role'=> 'dokter',
                'password'=> bcrypt('123456')
            ],
            [
                'name' => 'tenagaKesehatan',
                'email'=> 'tenagaKesehatan@gmail.com',
                'role'=> 'tenagaKesehatan',
                'password'=> bcrypt('123456')
            ],
            ];
            foreach($userData as $key=> $val){
                User::create($val);
            }
    }
}
