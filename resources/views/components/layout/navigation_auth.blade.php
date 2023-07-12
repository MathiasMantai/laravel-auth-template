<ul class="flex flex-row gap-x-4">
@auth
    <li class="p-2">You are logged in </li>
    <li class="p-2">{{ $username }}</li>
    <li class="hover:bg-sky-500 p-2"><a href="{{ route('dashboard')}}">Dashboard</a></li>
    <li class="hover:bg-sky-500 p-2"><a href="{{ route('logout')}}">Logout</a></li>
@endauth

@guest
    <li class="hover:bg-sky-500 p-2"><a href="{{ route('register')}}">Register</a></li>
    <li class="hover:bg-sky-500 p-2"><a href="{{ route('login')}}">Login</a></li>
@endguest
</ul>