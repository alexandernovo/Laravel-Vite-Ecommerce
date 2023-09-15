<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = ['name', 'email', 'username', 'password', 'role'];
}
