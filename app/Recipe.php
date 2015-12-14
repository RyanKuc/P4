<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function user() {
      return $this->belongsTo('\P4\User');
    }

    public function tags() {
      return $this->belongsToMany('\P4\Tag')->withTimestamps();
  }
}
