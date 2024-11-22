<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SourvenirsController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
