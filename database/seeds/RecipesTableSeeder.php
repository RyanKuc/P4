<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Italian Ciabatta Burgers',
          'picture_link' => 'https://d10up9ll8onrxl.cloudfront.net/680,480/image/56411f694dab7112428b4567.jpg?t=20151214090528',
          'description' => 'With Carmelized Onion, and Mozzarella',
          'ingredients' => 'Red Onion, Ground Beef, Mozzarella Cheese (Milk), Parmesan Cheese (Milk), Ciabatta (Wheat, Milk, Soy)',
          'instructions' => 'Caramelize the onions: Halve, peel, and thinly slice the onion. Heat a drizzle of oil in a large pan over medium heat. Add the onion and1 teaspoon sugar to the pan and cook, tossing, for 6-8 minutes, until
          caramelized. Season with salt and pepper, then set aside.
          Cook the burgers: Form the ground beef into 2 patties. In the same
          pan you cooked the onions in, heat another drizzle of oil over mediumhigh
          heat. Season the patties on all sides with salt and pepper, then
          place in the pan and cook for 2-4 minutes per side. Top the patties with the mozzarella and Parmesan
          cheese, then cover and cook another 1 minute, until the cheese melts.
          Toast the bread: While the patties cook, halve the ciabatta rolls and
          place in the oven or toaster to toast for 3-5 minutes.',
          'user_id' => '1',

        ]);
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Asian Noodle Salad',
          'picture_link' => 'http://beingfrugalbychoice.com/wp-content/uploads/2013/05/013.jpg',
          'description' => 'With Green onion and toasted sesame seeds',
          'ingredients' => 'Green onion, thin speghetti 1 lb, soy sauce, sesame oil, hot chili oil, sesame seeds',
          'instructions' => 'Boil water in a medium-large pot. Add 1 lb thin speghetti and cook 8-10 minutes until al dente. In a bowl, combine soy sauce, sesame oil, hot chili oil and wisk thoroughly. Toast sesame seeds over med-low heat for 3-5 minutes or until brown. Chop green onion. Combine sauce and cooked speghetti and allow to cool to room temperature before garnishing with green onion and sesame seeds',
          'user_id' => '1',

        ]);
        DB::table('recipes')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Caesar Salad',
          'picture_link' => 'http://didyouknow.link/wp-content/uploads/2015/08/caesar-salad-lower.jpg',
          'description' => 'with homemade dressing',
          'ingredients' => 'romaine lettuce, mayonnaise, olive oil, salt, pepper, garlic, anchovie paste, lemon, cayenne',
          'instructions' => 'Chop lettuce. In a small bowl, combine 3/4 cup mayonnaise, 1/4 cup olive oil, lemon juice, minced garlic, salt pepper and cayenne to taste, as well as a toothpaste sized squeeze of anchoive paste. Mix thoroughly and add dressing to romaine.',
          'user_id' => '1',

        ]);
    }
}
