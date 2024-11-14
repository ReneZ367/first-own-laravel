<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return view('dashboard.index', [
                'birthdays' => User::find(Auth::user()->id)->birthdays()->orderByRaw('STR_TO_DATE(date, "%d.%m")')->get(),
                'userName' => Auth::user()->name,
            ]);
        } else {
            return view('dashboard.index');
        }
    }
}
