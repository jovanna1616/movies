<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];


    const STORE_RULES = [
    	'movie_id' => 'required',
        'content' => 'required | string | min: 5',
    ];


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
