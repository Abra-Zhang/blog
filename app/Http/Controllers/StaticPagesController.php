<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function admin_home()
    {
        return view('admin.index');
    }
}
