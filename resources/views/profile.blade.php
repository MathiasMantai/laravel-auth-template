@extends('layout.app_auth', ['username' => $user->name])


@section('content')

<main class="flex grow justify-center p-8">
@if (session('status'))
<div id="successWindow" class="fixed top-2 right-2 bg-green-400" role="alert">
    {{ session('status') }}
</div>
@elseif (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

<div class="w-[100dvw] sm:w-[40dvw] bg-white rounded-md shadow-md flex flex-col items-center">
    <h1 class="text-center text-2xl p-4">Profile</h1>
    <form method="POST" action="{{ route('updateProfile')}}" class="">
        <table class="table-fixed">
            <tbody class="w-[100%] p-4">
                <tr class="w-[100%]">
                    <td class="">
                        Name
                    </td>
                    <td class="">
                        <input type="text" name="name" value="{{ $user->name }}" class="w-[100%] p-2 border-2 border-slate-300">
                    </td>
                </tr>
                <tr>
                    <td>
                        Passwort
                    </td>
                    <td>
                        <input type="text" name="password" value="{{ $user->password }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        E-Mail
                    </td>
                    <td>
                        <input type="text" name="email" value="{{ $user->email }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Änderungen speichern" class="w-[100%]" />
                    </td>
                </tr>
            </tobdy>
        </table>
        @csrf
        
    </form>
</div>

@endsection