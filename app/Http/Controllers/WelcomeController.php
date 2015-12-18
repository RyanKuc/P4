<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;

use P4\Http\Requests;
use P4\Http\Controllers\Controller;

class WelcomeController extends Controller {

  public function getIndex() {
    if(\Auth::check()) {
      $user = \Auth::user();

      $recipes =
      \P4\Recipe::where('user_id','=',\Auth::id())->orderBy('id','DESC')->get();

      $data = array (
      'user' => $user,
      'recipes' => $recipes
    );

      return view('welcome.index')->with($data);
    }
    else {
    return view('welcome.guestIndex');
  }
  }
}
