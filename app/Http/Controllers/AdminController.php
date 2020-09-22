<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function showDashBoard() {
        return view('admin.dash-board');
    }
}
