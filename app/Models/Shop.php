<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'shops';
    protected $primaryKey = 'shop_id';
    protected $fillable = ['shop_name', 'shop_description', 'shop_address'];
}
