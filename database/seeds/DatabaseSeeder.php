<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BlogSeeder::class);


    }

}
