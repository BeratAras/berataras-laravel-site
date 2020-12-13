<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    protected $table = 'github';
    protected $fillable = ['repo_link', 'repo_svg'];
}
