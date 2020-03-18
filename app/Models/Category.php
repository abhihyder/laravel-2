<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'status'
      
    ];


    //One to many join---------------------

    public function posts() // we can dicleare any method name
    {
        //return $this->belongsTo('App\Models\User'); // have to call the models we wanna join
        //return $this->hasMany(Post::class); // have to call the models we wanna join
        return $this->hasMany(Post::class);
        //we can use any one between two 
    }
}
