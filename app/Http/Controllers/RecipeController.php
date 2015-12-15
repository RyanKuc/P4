<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;

use P4\Http\Requests;
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
        return 'This will display a form to submit a new recipe';
    }

    /**
     *responds to POST /recipes/create
     */
    public function postCreate()
    {
        return 'This will process a new recipe';
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
