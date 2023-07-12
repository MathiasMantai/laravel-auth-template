<ul class="flex flex-row gap-x-4">
@guest
    <li class="hover:bg-sky-500 p-2"><a href="{{ route('register')}}">Register</a></li>
    <li class="hover:bg-sky-500 p-2"><a href="{{ route('login')}}">Login</a></li>
@endguest
</ul>