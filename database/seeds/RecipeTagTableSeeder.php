<?php

use Illuminate\Database\Seeder;

class RecipeTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes =[
          'Italian Ciabatta Burgers' => ['Beef','Sandwich'],
          'Asian Noodle Salad' => ['Pasta','Sides','Salad'],
          'Caesar Salad' => ['Appetizers','Salad','Sides']
        ];

        foreach($recipes as $title => $tags) {
          $recipe = \P4\Recipe::where('title', 'like', $title)->first();

            foreach($tags as $tagName) {
              $tag = \P4\Tag::where('tag_name', 'like', $tagName)->first();
              $recipe->tags()->save($tag);
            }

        }
    }
}
