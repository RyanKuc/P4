<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;

# use P4\Http\Requests;
use P4\Http\Controllers\Controller;

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
    $recipe = \P4\Recipe::where('id', '=', $id)->first();
    $tags = $recipe->tags;

    return view('recipes.show')->with('recipe', $recipe)
    ->with('tags', $tags);
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
    return redirect('/');
  }

  /**
  *responds to GET /recipes/edit/{id?}
  */
  public function getEdit($id)
  {
    $recipe = \P4\Recipe::with('tags')->find($id);
    $userId = \Auth::id();


    if(is_null($recipe)) {
      \Session::flash('flash_message', 'recipe not found');
      return redirect('/');
    }
    elseif ($userId <> $recipe->user_id) {
      \Session::flash('flash_message', 'you cannot edit someone elses recipe');
      return redirect('/');
    }


    $tagModel = new \P4\Tag();
    $tags_for_form = $tagModel->getTagsForForm();
    $tags_for_this_recipe = [];
    foreach($recipe->tags as $tag) {
      $tags_for_this_recipe[] = $tag->tag_name;
    }

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

  if ($userId <> $recipe->user_id) {
    \Session::flash('flash_message', 'you cannot delete someone elses recipe');
    return redirect('/');
  }

  return view('recipes.delete')->with('recipe', $recipe);
}

/**
*responds to GET /recipes/delete/{id?}
*/
public function getDoDelete($recipe_id)
{
    #find recipe
  $recipe = \P4\Recipe::find($recipe_id);

    #if can't find recipe
    if(is_null($recipe)) {
      \Session::flash('flash_message','recipe not found.');
      return redirect('/');
    }

    #remove tags
    if($recipe->tags()) {
      $recipe->tags()->detach();
    }

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

    #find recipe

  $user = \Auth::id();
  $prevLike = \P4\Like::where('recipe_id', '=', $request->recipe_id)
                            ->where('user_id', '=', $user)->first();

  #if can't find recipe
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

  \Session::flash('flash_message','you have already liked this post');
  return redirect('/recipes/show/');
  }


}
