<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function welcome()
    {
        return view('welcome');
    }
}
?>