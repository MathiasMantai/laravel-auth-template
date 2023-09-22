<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function userData(Request $request)
    {
        $callbackRoute = $request->getRequestUri();
        // die($callbackRoute);
        $user = Auth::user();
        return View::make($callbackRoute, ['user' => $user]);
    }
}