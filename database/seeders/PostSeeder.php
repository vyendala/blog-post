<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=> "Sample Title",
            'content'=> "Sample Content"
        ]);
        DB::table('posts')->insert([
            'title'=> "Sample Title",
            'content'=> "Sample Content"
        ]);
        DB::table('posts')->insert([
            'title'=> "Sample Title",
            'content'=> "Sample Content"
        ]);
        DB::table('posts')->insert([
            'title'=> "Sample Title",
            'content'=> "Sample Content"
        ]);
        DB::table('posts')->insert([
            'title'=> "Sample Title",
            'content'=> "Sample Content"
        ]);
        DB::table('posts')->insert([
            'title'=> "Sample Title",
            'content'=> "Sample Content"
        ]);
    }
}
