<?php

use Illuminate\Database\Seeder;

class WindowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('windows')->insert([
            'name' => Str::random(10),
            'img' => Str::random(10),
            'price' => random_int(50, 100),
            'type' => "profili",
        ]);
    }
}
