<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Auth Kütüphanesi
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';
}
