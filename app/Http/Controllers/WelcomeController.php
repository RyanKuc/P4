<?php

namespace P4\Http\Controllers;

use Illuminate\Http\Request;

use P4\Http\Requests;
use P4\Http\Controllers\Controller;

class WelcomeController extends Controller {

  public function getIndex() {
    return 'This is the Welcome Controller';
  }
}
