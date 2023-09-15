@extends('navbar')
@section('content')
<form method="post" action="{{route('login')}}">
    @csrf
    <div class="h-screen container flex mx-auto justify-between">
        <div class="w-full sm:w-full md:w-full lg:w-1/2 p-10">
            <img class="w-full h-full" src="assets/images/shoes-transparent.png">
        </div>
        <div class="w-full sm:w-full md:w-full lg:w-1/2 p-12 flex items-center">
            <div class="flex-1 ">
                <div class="w-3/4 mx-auto">
                    <h1 class="text-black text-3xl font-bold mb-4">Sign in to your Account</h1>
                    <div class="mb-2">
                        <label for="username" class="block text-sm text-gray-500 font-semibold mb-1">Username</label>
                        <input name="username" class="appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 border rounded-lg" id="username" />
                    </div>
                    <div class="mb-3">
                        <label for="username" class="block text-sm text-gray-500 font-semibold mb-1">Password</label>
                        <input name="password" class="appearance-none w-full focus:outline-none focus:shadow-outline focus:border-purple-400 text-gray-500 leading-tight py-2 px-3 border rounded-lg" id="username" />
                        @if ($errors->has('error'))
                        <p class="text-red-500 text-sm m-0">
                            {{ $errors->first('error') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-500 w-full text-white font-bold py-2 px-4 rounded-lg">
                            Sign in
                        </button>
                        <p class="text-decoration-none text-center mt-3 text-sm">No Account? <a href="{{route('register')}}" class="text-blue-400">Sign up here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection