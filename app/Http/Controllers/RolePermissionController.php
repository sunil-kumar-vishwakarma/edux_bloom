<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function index()
    {
        return view('roles_permission.index');
    }
    public function edit()
    {
        return view('roles_permission.edit');
    }
   
}
