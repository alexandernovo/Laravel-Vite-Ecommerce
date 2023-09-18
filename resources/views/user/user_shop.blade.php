@extends('navbar')
@section('content')
<div class="container mx-auto mt-3">
    <div class="border mx-auto p-5 py-10 rounded-lg shadow">
        <div class="w-[200px] h-[200px] border rounded-full overflow-hidden mx-auto">
            <img src="assets/images/register.jpg" class="w-full h-full object-cover" />
        </div>
        <div>
            <p class="text-center font-bold text-[17px] mt-5">Welcome {{Auth::user()->name}}!</p>
            <p class="text-gray-500 text-center text-[15px] mt-5">
                To get started, register as seller by providing the <br>necessary information
            </p>
        </div>
        <div class="mt-5 flex justify-center w-1/6 mx-auto text-center">
            <a href="{{route('registerShop')}}" class="bg-blue-500 hover:bg-blue-600 w-full text-white py-1.5 px-4 rounded">Get Started</a>
        </div>
    </div>
</div>
@endsection