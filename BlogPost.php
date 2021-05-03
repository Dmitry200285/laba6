<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['title','body','user_id'];

    public function categories(){
        return $this -> belongsToMany(
            Category::class,
            'categories_blogposts',
            'post_id',
            'category_id'
        );
    }

    public function user()
    {
        return $this -> belongsTo(
            User::class,
            'user_id'
        );
    }
}
