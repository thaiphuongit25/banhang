<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      return User::create([
        'name' => 'ntphuong',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),
        'address' => 'haha',
        'phone_number' => '123332323'
        ]);
    }
}
