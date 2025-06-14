<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RolePermissionController extends Controller
{

    public function index()
    {
      $roles = Role::all();
        return view('roles_permission.index', compact('roles'));
    }

    public function create()
    {
        return view('roles_permission.create');
    }
    public function edit($id)
    {
        return view('roles_permission.edit');
    }

    public function destroy($id)
    {
        return view('roles_permission.edit');
    }
   
}
