@extends('layout.app_guest')

@section('content')
<main class="flex grow items-center justify-center">
    <form method="POST" action="{{ url('authenticate') }}" class="flex flex-col gap-y-4 p-6 w-[25dvw] bg-white shadow-md rounded-md">
        <div class="text-center text-xl">
            Login
        </div>
        <input type="text" name="email" placeholder="e-mail" class="border p-2" />
        <input type="password" name="password" placeholder="password" class="border p-2" />
        <input type="submit" class="w-[100%] p-2 bg-blue-500 hover:bg-blue-600 text-white cursor-pointer" value="Login" />
        @csrf
        <div class="p-2 bg-yellow-500 hover:bg-yellow-600 text-center text-white">
            <a href="{{ route('authredirect', 'google') }}">Sign in with google</a>
        </div>
        <div class="p-2 bg-black hover:bg-grey-700 text-center text-white">
            <a href="{{ route('authredirect', 'github') }}">Sign in with github</a>
        </div>
    </form>
</main>
@endsection