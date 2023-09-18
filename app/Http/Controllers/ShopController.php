<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function usershop()
    {
        return view('user.user_shop');
    }

    public function registerShop()
    {
        return view('user.user_shop_registration');
    }
}
