@extends('layout.app_auth', ['username' => $user->name])


@section('content')

<main class="flex grow justify-center p-8">
@if (session('status'))
<div id="successWindow" class="fixed top-2 right-2 bg-green-400 p-2 px-6 rounded-md shadow-md text-white" role="alert">
    {{ session('status') }}
</div>
@elseif (session('error'))
<div id="errorWindow" class="fixed top-2 right-2 bg-red-400 p-2 px-6 rounded-md shadow-md text-white" role="alert">
    {{ session('error') }}
</div>
@endif

<div class="w-[100dvw] sm:w-[60dvw] lg:w-[40dvw] bg-white rounded-md shadow-md flex flex-col items-center p-4">
    <h1 class="text-center text-2xl p-4">Profil</h1>

    <x-divider>Profileinstellungen ändern</x-divider>

    <form method="POST" action="{{ route('updateProfile')}}" class="flex flex-col items-center">
        <table class="table-fixed w-full">
            <tbody class="p-4">
                <tr class="">
                    <td class="text-center">
                        Name
                    </td>
                    <td class="py-4">
                        <input type="text" name="name" value="{{ $user->name }}" class="w-[100%] p-2 border-2 border-slate-300">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        Passwort
                    </td>
                    <td class="py-4">
                        <input type="password" name="password" value="{{ trim($user->password) != '' ? '123456789' : ''  }}" class="w-[100%] p-2 border-2 border-slate-300" disabled>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        E-Mail
                    </td>
                    <td class="py-4">
                        <input type="text" name="email" value="{{ $user->email }}" class="w-[100%] p-2 border-2 border-slate-300">
                    </td>
                </tr>
            </tobdy>
        </table>
        <input type="submit" value="Änderungen speichern" class="w-[50%] bg-sky-500 hover:bg-sky-600 text-white p-2 mt-4 shadow-md cursor-pointer " />
        @csrf
    </form>

    <x-divider>Passwort ändern</x-divider>

    <form method="POST" action="{{ route('changePassword')}}" class="flex flex-col items-center">
        <table class="table-fixed w-full">
            <tbody class="p-4">
                <tr class="">
                    <td class="text-center">
                        Altes Passwort
                    </td>
                    <td class="py-4">
                        <input type="text" name="oldPassword"  class="w-[100%] p-2 border-2 border-slate-300">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        Neues Passwort
                    </td>
                    <td class="py-4">
                        <input type="text" name="newPassword" class="w-[100%] p-2 border-2 border-slate-300">
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        Neues Passwort bestätigen
                    </td>
                    <td class="py-4">
                        <input type="text" name="newPasswordRepeat"  class="w-[100%] p-2 border-2 border-slate-300">
                    </td>
                </tr>
            </tobdy>
        </table>
        <input type="submit" value="Passwort ändern" class="w-[50%] bg-sky-500 hover:bg-sky-600 text-white p-2 mt-4 shadow-md cursor-pointer " />
        @csrf
    </form>
</div>

@endsection