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
        if(is_null($recipe)) {
          \Session::flash('flash_message', 'recipe not found');
          return redirect('\recipes');
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
