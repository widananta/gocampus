<?php

use Illuminate\Database\Seeder;

class ptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\pt::class, 50)->create();
    }
}
