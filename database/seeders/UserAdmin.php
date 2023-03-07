<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Garciano",
            'email'=> "garcianogarcia18@gmail.com",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(10),
        ]);
           }
}
