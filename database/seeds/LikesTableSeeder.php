<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '1',
        'user_id' => '1',


      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '2',
        'user_id' => '2',


      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '2',
        'user_id' => '3',


      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '1',
        'user_id' => '3',


      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '4',
        'user_id' => '3',

      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '5',
        'user_id' => '3',

      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '7',
        'user_id' => '3',

      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '10',
        'user_id' => '3',

      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '10',
        'user_id' => '2',

      ]);

      DB::table('likes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'recipe_id' => '5',
        'user_id' => '1',

      ]);

    }
}
