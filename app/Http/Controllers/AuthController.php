<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Set 'is_admin' to true if the user's email matches the admin email
            if ($user->email == 'vishnu@sht.com') {
                $user->is_admin = true;
            }

            // Redirect to dashboard if login is successful
            return redirect()->route('dashboard');
        }

        // If authentication fails, redirect back to the login page with an error
        return back()->withErrors(['error' => 'Invalid credentials'])->withInput();
    }



    public function logout(Request $request)
    {
        auth()->logout(); // Logs out the user
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerates CSRF token for security

        return redirect('/admin/login'); // Redirects to the login page after logout
    }

    public function userLogout(Request $request)
    {
        auth()->logout(); // Logs out the user
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerates CSRF token for security

        return redirect('/student-login'); // Redirects to the login page after logout
    }
  
    public function teamLlogin(Request $request)
{

    $credentials = $request->only('email', 'password');
    $useremail = User::where('email',$request->email)->first();
    if($useremail->role_id == 2){

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Set 'is_admin' to true if the user's email matches the admin email
            // if ($user->email == 'vishnu@sht.com') {
            //     $user->is_admin = true;
            // }
            
           
            // Redirect to dashboard if login is successful
            return redirect()->route('dashboard');
            
        }
                }else{
                        return back()->withErrors(['error' => 'Invalid credentials'])->withInput();
                    }
                // If authentication fails, redirect back to the login page with an error
                return back()->withErrors(['error' => 'Invalid credentials'])->withInput();
            
        }
}
