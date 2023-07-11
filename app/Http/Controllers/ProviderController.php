<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class ProviderController extends Controller
{
    public function getProvider(Request $request, string $provider): RedirectResponse
    {
        var_dump($provider);
        die;
    }

    public function redirect(Request $request, string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request, string $provider): RedirectResponse
    {
        $providerUser = Socialite::driver('google')->user();
        if(!Auth::attempt([$providerUser->getName(),$providerUser->getEmail()]))
        {
            $user = User::updateOrCreate([
                'name' => $providerUser->getName(),
                'email' => $providerUser->getEmail(),
                'provider_type' => 'google',
                'provider_id' => $providerUser->getId(),
                'provider_token' => $providerUser->token,
                'provider_refresh_token' => $providerUser->refreshToken,
                'provider_token_expires' => $providerUser->expiresIn
            ]);

            Auth::login($user);
        }
        else
        {

        }
        return redirect('/');
    }
}
