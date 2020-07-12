<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    function getCategory(){
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
}
