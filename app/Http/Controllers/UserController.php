<?php

namespace App\Http\Controllers;

use App\Models\Translate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.dashboard');
    }
}