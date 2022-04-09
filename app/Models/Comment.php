<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;
 
    protected $fillable = [
        'content',
    ];
    
    public function blogPost(){
        return $this->belongsTo('App\Models\BlogPost');
    }
}
