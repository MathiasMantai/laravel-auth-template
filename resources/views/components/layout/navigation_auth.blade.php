<ul class="flex flex-row gap-x-4">
@auth
    <li class="p-2">You are logged in </li>
    <li class="p-2">{{ $username }}</li>
    <a href="{{ route('dashboard') }}"><li class="hover:bg-sky-500 p-2">Dashboard</li></a>
    <a href="{{ route('profile') }}"><li class="hover:bg-sky-500 p-2">Profile</li></a>
    <a href="{{ route('logout') }}"><li class="hover:bg-sky-500 p-2">Logout</li></a>
@endauth

@guest
    <a href="{{ route('register') }}"><li class="hover:bg-sky-500 p-2">Register</li></a>
    <a href="{{ route('login') }}"><li class="hover:bg-sky-500 p-2">Login</li></a>
@endguest
</ul>