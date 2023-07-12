@extends('layout.app_auth', ['username' => $user->name])


@section('content')

<main class="flex grow justify-center p-8">
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@elseif (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

<div class="w-[100dvw] sm:w-[60dvw] bg-white">
    <h1>Profile</h1>
</div>

@endsection