<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index-users');
    }

    public function admin()
    {
        return view('dashboard.index-admin');
    }
}
