<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;

use P4\Http\Requests;
use P4\Http\Controllers\Controller;

class WelcomeController extends Controller {

  public function getIndex() {
    if(\Auth::check()) {
      return redirect()->to('/recipes/show');
    }
    return view('auth.login');

  }
}
