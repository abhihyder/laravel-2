<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'thumbnail_image',
        'status'
    ];

    // one to one join for category------------------------------
    public function category() // we can dicleare any method name
    {
        //return $this->belongsTo('App\Models\Category'); // have to call the models we wanna join
        return $this->belongsTo(Category::class); // have to call the models we wanna join

        //we can use any one between two 
    }

       // one to one join for user------------------------------
       public function user() // we can dicleare any method name
       {
           //return $this->belongsTo('App\Models\User'); // have to call the models we wanna join
           return $this->belongsTo(User::class); // have to call the models we wanna join
   
           //we can use any one between two 
       }
}
 
