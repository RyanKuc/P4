<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;
use P4\Http\Controllers\Controller;
use DB;

class RecipeController extends Controller
{
    /**
    * responds to GET /recipes
    */
    public function getIndex()
    {
      $recipes =
      \P4\Recipe::orderBy('id','DESC')->get();

      return view('recipes.index')->with('recipes', $recipes);
    }

    /**
    *responds to GET /recipes/show/{id?}
    */
    public function getShow($id)
    {
      $user = \Auth::id();
      $recipe = \P4\Recipe::where('id', '=', $id)->first();
      if(\P4\Like::where('recipe_id', '=', $id)
      ->where('user_id', '=', $user)->exists()){
        $isLiked = 'true';}
        else{$isLiked = 'false';}
        $tags = $recipe->tags;

        return view('recipes.show')->with('recipe', $recipe)
        ->with('tags', $tags)
        ->with('isLiked', $isLiked)
        ->with('user', $user);
      }

      /**
      *responds to GET /recipes/myrecipes
      */
      public function getMyRecipes()
      {

        $user = \Auth::user();

        $recipes =
        \P4\Recipe::where('user_id','=',\Auth::id())->orderBy('id','DESC')->get();

        $data = array (
        'user' => $user,
        'recipes' => $recipes
        );

      return view('recipes.myrecipes')->with($data);
    }




    /**
    *responds to GET /recipes/create
    */
    public function getCreate()
    {
      $tagModel = new \P4\Tag();
      $tags_for_form = $tagModel->getTagsForForm();

      return view('recipes.create')->with('tags_for_form', $tags_for_form);
    }

    /**
    *responds to POST /recipes/create
    */
    public function postCreate(Request $request)
    {
      #validate form inputs
      $this->validate($request, [
        'title' => 'required|min:5|string',
        'picture_link' => 'required|URL',
        'description' => 'required|min:5|string',
        'ingredients' => 'required|min:5|string',
        'instructions' => 'required|min:5|string',
      ]);

      #process into db
      $recipe = new \P4\Recipe();
      $recipe->title = $request->title;
      $recipe->picture_link = $request->picture_link;
      $recipe->description = $request->description;
      $recipe->ingredients = $request->ingredients;
      $recipe->instructions = $request->instructions;
      $recipe->user_id = \Auth::id();

      #save
      $recipe->save();

      # Add the tags
      if($request->tags) {
        $tags = $request->tags;
      }
      else {
        $tags = [];
      }
      $recipe->tags()->sync($tags);

      # send confirmation message and move to my recipes
      \Session::flash('flash_message', 'Recipe Successfully Added!');
      return redirect('/recipes/myrecipes');
    }

    /**
    *responds to GET /recipes/edit/{id?}
    */
    public function getEdit($id)
    {
      $recipe = \P4\Recipe::with('tags')->find($id);
      $userId = \Auth::id();

      #ensure that recipes exists and belongs to user or redirect them to homepage
      if(is_null($recipe)) {
        \Session::flash('flash_message', 'recipe not found');
        return redirect('/');
      }
      elseif ($userId <> $recipe->user_id) {
        \Session::flash('flash_message', 'you cannot edit someone elses recipe');
        return redirect('/');
      }
      #pull in tags
      $tagModel = new \P4\Tag();
      $tags_for_form = $tagModel->getTagsForForm();
      $tags_for_this_recipe = [];
      foreach($recipe->tags as $tag) {
        $tags_for_this_recipe[] = $tag->tag_name;
      }
      #show recipe edit form with current values
      return view('recipes.edit')->with(['recipe' => $recipe,
      'tags_for_form' => $tags_for_form,
      'tags_for_this_recipe' => $tags_for_this_recipe,
    ]);

  }

  /**
  *responds to POST /recipes/edit/{id?}
  */
  public function postEdit(Request $request)
  {
    #validate
    $this->validate($request, [
      'title' => 'required|min:5|string',
      'picture_link' => 'required|URL',
      'description' => 'required|min:5|string',
      'ingredients' => 'required|min:5|string',
      'instructions' => 'required|min:5|string',
    ]);


    #process into db
    $recipe = \P4\Recipe::find($request->id);
    $recipe->title = $request->title;
    $recipe->picture_link = $request->picture_link;
    $recipe->description = $request->description;
    $recipe->ingredients = $request->ingredients;
    $recipe->instructions = $request->instructions;


    #save
    $recipe->save();

    # Add the tags
    if($request->tags) {
      $tags = $request->tags;
    }
    else {
      $tags = [];
    }
    $recipe->tags()->sync($tags);

    # send confirmation message and move to my recipes
    \Session::flash('flash_message', 'Recipe Successfully Updated!');
    return redirect('/recipes/show/'.$request->id);
  }

  /**
  *responds to GET /recipes/confirm-delete/{id?}
  */
  public function getConfirmDelete($recipe_id)
  {
    $userId = \Auth::id();
    $recipe = \P4\Recipe::find($recipe_id);
  #confirm recipe belongs to current user
    if ($userId <> $recipe->user_id) {
      \Session::flash('flash_message', 'you cannot delete someone elses recipe');
      return redirect('/');
    }
  #show delete confirmation view
    return view('recipes.delete')->with('recipe', $recipe);
  }


  /**
  *responds to GET /recipes/delete/{id?}
  */
  public function getDoDelete($recipe_id)
  {
    $userId = \Auth::id();
    #find recipe
    $recipe = \P4\Recipe::find($recipe_id);
    #confirm recipe belongs to current user

    #if can't find recipe or doesnt belong to current user redirect
    if(is_null($recipe)) {
      \Session::flash('flash_message','recipe not found.');
      return redirect('/');
    }
      elseif($userId <> $recipe->user_id) {
        \Session::flash('flash_message', 'you cannot delete someone elses recipe');
        return redirect('/');
      }

    #remove tags
    if($recipe->tags()) {
      $recipe->tags()->detach();
    }

    #remove likes associated with this recipe
    $deleteLikes = \P4\Like::where('recipe_id', $recipe_id)->delete();


    #delete
    $recipe->delete();

    #confirmation
    \Session::flash('flash_message',$recipe->title.' was deleted.');
    return redirect('/');
  }



  /**
  *responds to POST /recipes/like/{id?}
  */

  public function postLike(Request $request)
  {

    #find recipe and see if user already liked recipe

    $user = \Auth::id();
    $prevLike = \P4\Like::where('recipe_id', '=', $request->recipe_id)
    ->where('user_id', '=', $user)->first();

    #if like doesnt already exist for that user and recipe
    if(is_null($prevLike)) {


      #process into db
      $like = new \P4\Like();
      $like->recipe_id = $request->recipe_id;
      $like->user_id = \Auth::id();

      #save
      $like->save();


      # send confirmation message and move to my recipes
      \Session::flash('flash_message', 'You have liked this post!');
      return redirect('/recipes/show/'.$request->recipe_id);
    }
    #if the user already liked this recipe
    \Session::flash('flash_message','you have already liked this post');
    return redirect('/recipes/show/'.$request->recipe_id);
  }

  /**
  *responds to POST /recipes/unlike/{id?}
  */
  public function postUnLike(Request $request) {
    #find like for this user and recipe
    $user = \Auth::id();
    $prevLike = \P4\Like::where('recipe_id', '=', $request->recipe_id)
    ->where('user_id', '=', $user)->first();


    #delete like
    $prevLike->delete();

    #confirmation message
    \Session::flash('flash_message', 'You have Un-liked this post!');
    return redirect('/recipes/show/'.$request->recipe_id);

  }

  /**
  *responds to GET /recipes/likedbyme
  */
  public function getLikedByMe() {
    $user = \Auth::id();
    $likes = \P4\Like::where('user_id', '=', $user)->get();
    $recipeIds = [];
    foreach($likes as $like){
      $recipeIds[$like->recipe_id] = $like->recipe_id;}
      $recipes = \P4\Recipe::whereIn('id', $recipeIds)->get();


      return view('recipes.like')->with('recipes', $recipes);
    }

}
