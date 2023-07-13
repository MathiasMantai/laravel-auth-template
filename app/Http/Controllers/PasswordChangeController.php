<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordChangeController extends Controller
{
    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $newPassword = $request->newPassword;
        $newPasswordRepeat = $request->newPasswordRepeat;

        $credential = $request->only('password');
        print trim($user->password) == "" ? "true" : "false";
        print Auth::attempt($credential)  ? "true" : "false";
        die;



        if(Auth::attempt($credential) || trim($user->password) == "" && $newPassword == $newPasswordRepeat)
        {
            $user->password = Hash::make($newPassword);
            $user->save();
            return redirect('/profile')->with('status', 'Passwort erfolgreich geändert');
        }
        else
        {
            return back()->with('error', 'Passwort konnte nicht geändert werden');
        }
    }
}
