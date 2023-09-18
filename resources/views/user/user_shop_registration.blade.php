@extends('navbar')
@section('content')
<div class="container mx-auto mt-3">
    <div class="w-full border p-5 rounded-lg shadow">
        <div>
            <h3 class="text-[19px] flex mb-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                Shop Information
            </h3>
        </div>
        <hr>
        <div class="mt-12">
            <form method="POST" action="{{route('registerShopPost')}}">
                @csrf

                <div class="w-1/2 mx-auto">
                    <div class=" mb-2">
                        <div class="relative">
                            <input name="shop_name" value="{{old('shop_name')}}" type="text" id="shop_name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border {{$errors->has('shop_name')?'border-red-400':''}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="shop_name" class="absolute text-sm {{$errors->has('shop_name')?' text-red-400':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Shop Name
                            </label>
                        </div>
                        @if ($errors->has('shop_name'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('shop_name') }}
                        </p>
                        @endif
                    </div>

                    <div class="mb-2">
                        <div class="relative">
                            <textarea name="shop_description" type="text" id="shop_description" rows="3" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 rounded-lg bg-transparent border {{$errors->has('shop_description')?'border-red-400':''}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">{{old('shop_description')}}</textarea>
                            <label for="shop_description" class="absolute text-sm {{$errors->has('shop_name')?'text-red-400':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Shop Description
                            </label>
                        </div>
                        @if ($errors->has('shop_description'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('shop_description') }}
                        </p>
                        @endif
                    </div>

                    <div class="mb-2">
                        <div class="relative">
                            <input name="shop_address" value="{{old('shop_address')}}" type="text" id="shop_address" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg  border {{$errors->has('shop_address')?'border-red-400':''}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="shop_address" class="absolute text-sm {{$errors->has('shop_address')?'text-red-400':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Shop Address
                            </label>
                        </div>
                        @if ($errors->has('shop_address'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('shop_address') }}
                        </p>
                        @endif
                    </div>

                    <div class="relative mb-3">
                        <input value="{{Auth::user()->email}}" readonly name="email" type="text" id="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border-1 border appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="email" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Email
                        </label>
                    </div>
                    <div class="mb-3 flex justify-end space-x-2">
                        <a href="{{route('shop')}}" class="bg-gray-400 hover:bg-gray-500 text-white py-1.5 px-5 rounded">Cancel</a>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-1.5 px-5 rounded" type="submit">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection