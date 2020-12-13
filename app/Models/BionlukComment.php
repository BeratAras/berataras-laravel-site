<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BionlukComment extends Model
{
    protected $table = 'bionluk_comments';
    protected $fillable = ['username', 'comment', 'user_photo'];

}
