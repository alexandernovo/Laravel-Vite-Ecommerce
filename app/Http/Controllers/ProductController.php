<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function products()
    {
        return view('products');
    }
}
