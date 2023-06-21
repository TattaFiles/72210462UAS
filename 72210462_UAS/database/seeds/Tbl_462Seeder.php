<?php

use Illuminate\Database\Seeder;

class Tbl_462Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_462')->insert([
            'article_title' => Str::random(10),
            'article_date' => Date('2023/06/23'),
            'article_text' => Str::random(20),
        ]);
    }
}
