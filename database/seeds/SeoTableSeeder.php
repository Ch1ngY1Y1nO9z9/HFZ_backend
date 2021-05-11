<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo')->insert([
            'page' => "default_seo",
            'keyword' => 'HolofightZ',
            'title' => 'HolofightZ',
            'description' => 'HolofightZ'
        ]);
    }
}
