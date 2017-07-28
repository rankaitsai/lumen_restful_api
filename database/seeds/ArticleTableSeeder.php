<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            'id' => 1,
            'title' => 'article1',
            'content' => 'hello this is article1'
        ]);
    }
}
