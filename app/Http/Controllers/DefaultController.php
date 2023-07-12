<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
    public static function getUserDataByValue(string $key, mixed $value)
    {
        return DB::table('users')->where($key, $value)->get();
    }
}
