<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private function data() {
        return [
            [
                'name'      => 'Master',
                'email'     => 'leandro.leivat@gmail.com',
                'phone'     => '+56986328408',
                'password'  => Hash::make('123123'),
                'state'     => true
            ],
        ];
    }
    public function run(): void
    {
        $users = $this->data();
        foreach ($users as $user) {
            User::firstOrCreate($user);
        }
    }
}
