<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagList =
        [
          'Appetizers',
          'Baking',
          'Beef',
          'Breakfast',
          'Chicken',
          'Desserts',
          'Drinks',
          'Fish',
          'Pasta',
          'Pizza',
          'Pork',
          'Salad',
          'Sides',
          'Sandwich'
        ];

        foreach($tagList as $tagName) {
          $tag = new \P4\Tag();
          $tag->tag_name = $tagName;
          $tag->save();
          }
    }
}
