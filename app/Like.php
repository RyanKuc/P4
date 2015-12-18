<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  public function users() {
    return $this->belongsToMany('\P4\User');
}

public function recipes() {
  return $this->belongsToMany('\P4\Recipe');
}

}
