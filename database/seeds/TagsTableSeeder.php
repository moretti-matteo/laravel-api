<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [];

        foreach($tags as $elem){
            $tag = new Tag();
            $tag->name = $elem;
        }
    }
}
