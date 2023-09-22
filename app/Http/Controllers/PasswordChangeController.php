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
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $newPasswordRepeat = $request->newPasswordRepeat;

        if(Hash::check($oldPassword, $user->password) || trim($user->password) == "" && $newPassword == $newPasswordRepeat)
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
