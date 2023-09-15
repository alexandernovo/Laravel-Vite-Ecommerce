@extends('navbar')
@section('content')
<div class="container flex mx-auto justify-between">
    <div class="w-full sm:w-full md:w-full lg:w-1/2 p-10">
        <img class="w-full h-full" src="assets/images/register.jpg">
    </div>
    <div class="w-full sm:w-full md:w-full lg:w-1/2 p-12 flex items-center">
        <div class="flex-1 ">
            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="w-3/4 mx-auto">
                    <h1 class="text-black text-3xl font-bold mb-4">Sign up</h1>
                    <div class="mb-3">
                        <div class="relative">
                            <input name="name" type="text" id="floating_outlined" value="{{old('name')}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 {{$errors->has('name')?'border border-red-300':'border'}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 {{$errors->has('name')?'text-red-500':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Name
                            </label>
                        </div>
                        @if ($errors->has('name'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('name') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="relative">
                            <input name="email" type="text" id="floating_outlined" value="{{old('email')}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 {{$errors->has('email')?'border border-red-300':'border'}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 {{$errors->has('email')?'text-red-500':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Email
                            </label>
                        </div>
                        @if ($errors->has('email'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="relative">
                            <input name="username" type="text" id="floating_outlined" value="{{old('username')}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 {{$errors->has('username')?'border border-red-300':'border'}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 {{$errors->has('username')?'text-red-500':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Username
                            </label>
                        </div>
                        @if ($errors->has('username'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('username') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="relative">
                            <input name="password" type="text" id="floating_outlined" value="{{old('password')}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 {{$errors->has('password')?'border border-red-300':'border'}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 {{$errors->has('password')?'text-red-500':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Password
                            </label>
                        </div>
                        @if ($errors->has('password'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('password') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <div class="relative">
                            <input name="confpass" type="text" id="floating_outlined" value="{{old('confpass')}}" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 {{$errors->has('confpass')?'border border-red-300':'border'}} appearance-none text-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 {{$errors->has('confpass')?'text-red-500':'text-gray-400'}} duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Password
                            </label>
                        </div>
                        @if ($errors->has('confpass'))
                        <p class="text-red-500 text-[13px] m-0">
                            {{ $errors->first('confpass') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-2">
                        <button class="bg-blue-500 hover:bg-blue-500 w-full text-white py-2 px-4 rounded-lg">
                            SIGN UP
                        </button>
                        <p class="text-decoration-none text-sm text-center mt-3">Already Have Account? <a href="{{route('login')}}" class="text-blue-400">Sign in here</a></p>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection