<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Movie extends Model {

    protected $guarded = ['id'];

    protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];


    const STORE_RULES = [
        'title' => 'required | max: 25',
        'genre' => 'required | max: 20',
        'year' => 'required | integer | between:1900, {year}',
        'storyline' => 'required | max: 1000'
    ];



    static function getMovies() {
    	return self::all();
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
