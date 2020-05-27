<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'is_active' => 1,
            'name' => 'Guylian',
            'email' => 'guylianbraeckman@gmail.com',
            'photo_id' => 1,
            'role_id' => 1,
            'password' => bcrypt(123456789)]);
    }
}
