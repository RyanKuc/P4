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
     *responds to GET /recipes/show/{title?}
     */
    public function getShow()
    {
        return 'This will display a specific recipe';
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
    public function getEdit()
    {
        return 'This will display an edit form for a particular recipe';
    }

    /**
     *responds to POST /recipes/edit/{id?}
     */
    public function postEdit()
    {
        return 'This will process the edit form for a particular recipe';
    }

    /**
     *responds to GET /recipes/confirm-delete/{id?}
     */
    public function getConfirmDelete()
    {
        return 'This will display the deletion confirmation form';
    }

    /**
     *responds to GET /recipes/delete/{id?}
     */
    public function getDoDelete()
    {
        return 'This will delete a recipe';
    }

  }
