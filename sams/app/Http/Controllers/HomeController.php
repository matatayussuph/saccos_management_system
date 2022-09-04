<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (!empty(Auth::user()->role)) {
            $role = Auth::user()->role;
            if ($role == '1') {
                return view('clerks.dashboard');
            } else
                if ($role == '2') {
                    return view('loan_officer.dashboard');
                } else
                    if ($role == '3') {
                        return view('Accountant.dashboard');
                    } else
                        if ($role == '0') {
                            return view('manager.dashboard');
                        } else {
                            return view('login');
                        }
        }
    }
}
