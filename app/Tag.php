<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function recipes() {
      return $this->belongsToMany('\P4\Recipe')->withTimestamps();
    }
}
