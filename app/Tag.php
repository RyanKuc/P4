<?php

namespace P4;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function recipes() {
      return $this->belongsToMany('\P4\Recipe')->withTimestamps();
    }

    public function getTagsForForm() {

            $tags = $this->orderBy('tag_name','ASC')->get();

            $tagsForForm = [];

            foreach($tags as $tag) {
                $tagsForForm[$tag['id']] = $tag;
            }

            return $tagsForForm;

        }
}
