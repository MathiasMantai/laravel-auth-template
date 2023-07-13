<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    

    public function updateProfile(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email
        ];

        $user = Auth::user();

        $user->update($data);

        return redirect('profile')->with('status', 'Profil erfolgreich geändert');
    }
}
