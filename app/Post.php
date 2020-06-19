<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $dates = ['published_at'];
    /**
     * @var mixed|string
     */

    public function category() {

        return $this->belongsTo(Category::class);
    }

    public function tags() {

        return $this->belongsToMany(Tag::class);
    }
}
