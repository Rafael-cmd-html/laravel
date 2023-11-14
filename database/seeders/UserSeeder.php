<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= new User();

        $user->name ="Juanito";
        $user->lastname="Mantequilla";
        $user->email ="mantequilla@gmail.com";
        $user->password ="123";

        $user->save();
        User::factory(10)
        ->create();
        //
    }
}
