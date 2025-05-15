<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{

    public function edit_privacy()
    {
        return view('pages.edit_privacy');
    }
    public function edit_term()
    {
        return view('pages.edit_term');
    }
}
