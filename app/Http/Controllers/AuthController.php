<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Employer;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Employer::attempt($credentials) || Employee::attempt($credentials)) {
            $userRole = Employer::employer()->role || Employee::employee()->role;

            if ($userRole == '1') {
                return 'success Logged in as an Admin | Employer';
            } elseif ($userRole == '2') {
                return 'success Logged in as a Employee';
            }
        } else {
            // Authentication failed
            return back()->with('fail', 'Invalid credentials');
        }
    }
}
