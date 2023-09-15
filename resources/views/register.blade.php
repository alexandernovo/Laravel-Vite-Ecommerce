@extends('navbar')
@section('content')
<div class="container flex mx-auto justify-between">
    <div class="w-full sm:w-full md:w-full lg:w-1/2 p-10">
        <img class="w-full h-full" src="assets/images/shoes-transparent.png">
    </div>
    <div class="w-full sm:w-full md:w-full lg:w-1/2 p-12 flex items-center">
        <div class="flex-1 ">
            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="w-3/4 mx-auto">
                    <h1 class="text-black text-3xl font-bold mb-4">Sign up</h1>
                    <div class="mb-2">
                        @if(session()->has('success'))
                        <p class="p-3 bg-green-600 text-white rounded-lg mb-2">{{ session('success') }}</p>
                        @endif
                        <label for="name" class="block text-sm {{$errors->has('name')?'text-red-500':'text-gray-500'}} font-semibold mb-1">Name</label>
                        <input name="name" value="{{old('name')}}" class="appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 {{$errors->has('name')?'border border-red-300 placeholder-red-300':'border'}} rounded-lg " id="name" placeholder="Name" />
                        @if ($errors->has('name'))
                        <p class="text-red-500 text-sm m-0">
                            {{ $errors->first('name') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label for="email" class="block text-sm {{$errors->has('email')?'text-red-500':'text-gray-500'}} font-semibold mb-1">Email</label>
                        <input name="email" value="{{old('email')}}" class=" appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 {{$errors->has('email')?'border border-red-300 placeholder-red-300':'border'}} rounded-lg" id="email" placeholder="Email" />
                        @if ($errors->has('email'))
                        <p class="text-red-500 text-sm m-0">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label for="username" class="block text-sm {{$errors->has('username')?'text-red-500':'text-gray-500'}} font-semibold mb-1">Username</label>
                        <input name="username" value="{{old('username')}}" class=" appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 {{$errors->has('username')?'border border-red-300 placeholder-red-300':'border'}} rounded-lg" id="username" placeholder="Username" />
                        @if ($errors->has('username'))
                        <p class="text-red-500 text-sm m-0">
                            {{ $errors->first('username') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="block text-sm {{$errors->has('password')?'text-red-500':'text-gray-500'}} font-semibold mb-1">Password</label>
                        <input name="password" value="{{old('password')}}" class="appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 {{$errors->has('password')?'border border-red-300 placeholder-red-300':'border'}} rounded-lg" id="password" placeholder="Password" />
                        @if ($errors->has('password'))
                        <p class="text-red-500 text-sm m-0">
                            {{ $errors->first('password') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="confpass" class="block text-sm {{$errors->has('confpass')?'text-red-500':'text-gray-500'}} font-semibold mb-1">Confirm Password</label>
                        <input name="confpass" class="appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 {{$errors->has('confpass')?'border border-red-300 placeholder-red-300':'border'}} rounded-lg" id="confpass" placeholder="Confirm Password" />
                        @if ($errors->has('confpass'))
                        <p class="text-red-500 text-sm m-0">
                            {{ $errors->first('confpass') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-2">
                        <button class="bg-blue-500 hover:bg-blue-500 w-full text-white font-bold py-2 px-4 rounded-lg">
                            Sign up
                        </button>
                        <p class="text-decoration-none text-sm text-center mt-3">Already Have Account? <a href="{{route('login')}}" class="text-blue-400">Sign in here</a></p>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection