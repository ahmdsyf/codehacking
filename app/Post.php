<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Post extends Model
{
    
    // Massive Assignment, is a thing that permit data store to database
    protected $fillable = [

        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body',
    
    ];


    public function user(){

        return $this->belongsTo('App\User');

    }


    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function category(){

        return $this->belongsTo('App\Category');

    }


}
