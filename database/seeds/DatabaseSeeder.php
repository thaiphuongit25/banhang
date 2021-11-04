<?php

use Illuminate\Database\Seeder;
use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users =
        [
            [
                'name' => 'admin',
                'address' => 'duc',
                'phone_number' => '123444444',
                'email' => 'thaiphuongit25@gmail.com',
                'is_admin' => true,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10)
            ]
        ];
        DB::table('users')->insert($users);
    }
}
