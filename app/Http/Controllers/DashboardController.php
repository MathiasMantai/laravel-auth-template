<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DefaultControlöer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function dashboardData(Request $request)
    {
        $user = Auth::user();
        return View::make('dashboard', ['user' => $user]);
    }
}
