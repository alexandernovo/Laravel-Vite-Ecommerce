@extends('navbar')
@section('content')
<form method="post" action="{{route('login')}}">
    @csrf
    <div class="container flex mx-auto justify-between items-center mt-12">
        <div class="w-full sm:w-full md:w-full lg:w-1/2 p-10">
            <img class="w-full h-full" src="assets/images/shoes.jpg">
        </div>
        <div class="w-full sm:w-full md:w-full lg:w-1/2 p-12 flex items-center">
            <div class="flex-1 ">
                <div class="w-3/4 mx-auto">
                    <h1 class="text-black text-lg font-bold mb-2">Welcome Back!</h1>
                    <h1 class="text-black text-3xl font-bold mb-4">Sign in to your Account</h1>
                    <div class="relative mb-3">
                        <input name="username" type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border appearance-none dark:text-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Username
                        </label>
                    </div>
                    <div class="mb-3">
                        <div class="relative mb-2">
                            <input name="password" type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border appearance-none dark:text-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Password
                            </label>
                        </div>
                        @if ($errors->has('error'))
                        <p class="text-red-500 text-sm m-0 text-[13px]">
                            {{ $errors->first('error') }}
                        </p>
                        @endif
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-500 w-full text-white py-2.5 px-4 rounded-lg">
                            SIGN IN
                        </button>
                        <p class="text-decoration-none text-center mt-3 text-sm">No Account? <a href="{{route('register')}}" class="text-blue-400">Sign up here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection