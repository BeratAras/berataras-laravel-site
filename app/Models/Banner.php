<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = ['banner_text', 'banner_type', 'banner_link', 'banner_file', 'banner_status'];
}
