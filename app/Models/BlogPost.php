<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable =['title','content'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public static function boot(){
        parent::boot();
        static::deleting(function(BlogPost $blogPost){
            $blogPost->comments()->delete();
        });

        static::restoring(function(BlogPost $blogPost){
            $blogPost->comments()->restore();
        });

    }
}

