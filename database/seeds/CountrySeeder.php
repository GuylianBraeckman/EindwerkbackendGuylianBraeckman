<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert(['name' => 'Belgium' ]);
        DB::table('countries')->insert(['name' => 'France' ]);
        DB::table('countries')->insert(['name' => 'Netherlands' ]);
        DB::table('countries')->insert(['name' => 'Portugal' ]);
        DB::table('countries')->insert(['name' => 'Spain' ]);
        DB::table('countries')->insert(['name' => 'China' ]);
        DB::table('countries')->insert(['name' => 'Japan' ]);

    }
}
