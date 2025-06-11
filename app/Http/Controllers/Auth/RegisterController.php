<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validation rules
      $validator = Validator::make($request->all(), [
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email',
   'password' => [
    'required',
    'string',
    'min:6', 
    'regex:/^(?=.*[A-Z])(?=.*\d).+$/', // ensures 1 uppercase and 1 number
],

    // 'tc' => 'required|accepted'
]);


        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Create user
        $user = Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Auth::login($user);

        // Send the email verification link
        // $user->sendEmailVerificationNotification();

        // Send email verification
    event(new Registered($user));

    // return redirect()->route('student-login')->with('success', 'Registration successful! Please check your email to verify your account.');


        // return redirect()->route('verification.notice');


        // event(new Registered($user));

        return response()->json([
            'status' => true,
            'message' => 'Registration successful! Please check your email to verify your account.',
            'data' => $user
        ], 201);
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => bcrypt(uniqid()), // optional if needed
                    'email_verified_at' => now(),   // assume verified via Google
                ]
            );

            Auth::login($user);

            return redirect('/userdashboard');
        } catch (Exception $e) {
            return redirect('/login')->withErrors('Unable to login with Google.');
        }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();

        $user = User::updateOrCreate(
            ['email' => $facebookUser->getEmail()],
            [
                'name' => $facebookUser->getName(),
                'email' => $facebookUser->getEmail(),
                'password' => bcrypt('facebook123'), // optional placeholder
            ]
        );

        Auth::login($user);

        return redirect('/userdashboard'); // or wherever you want
    }
    
}
