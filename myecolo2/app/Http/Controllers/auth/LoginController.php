<?php

namespace App\Http\Controllers\auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Seller;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
