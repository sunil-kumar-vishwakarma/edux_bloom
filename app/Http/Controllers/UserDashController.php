<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserDashController extends Controller
{

    public function userdashboard()
    {
        return view('userdashboard');
    }
    public function usersearchProgram()
    {
        return view('usersearchProgram');
    }
    public function userprofile()
    {
        return view('userprofile');
    }
    public function user_myapplication()
    {
        return view('user_myapplication');
    }
    public function userpayments()
    {
        return view('userpayments');
    }
    public function education_history()
    {
        return view('education_history');
    }
    public function user_testScore()
    {
        return view('user_testScore');
    }


}
