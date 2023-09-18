<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    protected $primaryKey = 'shop_id';
    protected $fillable = ['users_id', 'shop_name', 'shop_description', 'shop_address'];
}
