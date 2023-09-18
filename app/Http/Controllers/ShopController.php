<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

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
    public function registerShopPost()
    {
        if (request()->isMethod('post')) {

            $validator = Validator::make(
                $this->request->all(),
                [
                    'shop_name'          => 'required|unique:shops,shop_name',
                    'shop_description'   => 'required',
                    'shop_address'       => 'required',
                ],
                [
                    'shop_name.required'           => 'The name of your shop is required',
                    'shop_name.unique'             => 'The shop name you want is already taken',
                    'shop_description.required'    => 'The description for your shop is required',
                    'shop_address.required'        => 'The address of your shop is required'
                ]
            );

            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validator);
            }
            $user = Auth::user();
            $data = [
                'users_id'          => $user->users_id,
                'shop_name'         => $this->request->input('shop_name'),
                'shop_description'  => $this->request->input('shop_description'),
                'shop_address'      => $this->request->input('shop_address'),
            ];
            $save = Shop::create($data);

            if ($save) {
                echo 'Success';
                // return redirect()->route('user')->with('success', 'Welcome ' . $this->request->input('name'));
            }
        }
    }
}
