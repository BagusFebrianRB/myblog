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
     */
    public function run(): void
    {
        User::factory()->create(
            [
                'name'=>'Bagus Febrian',
                'username'=>'bagusfebrian',
                'email'=>'bagusfebrian67@gmail.com',
                'password' => Hash::make('tuban123'),
            ]
            );

            User::factory(5)->create();
    }
}
