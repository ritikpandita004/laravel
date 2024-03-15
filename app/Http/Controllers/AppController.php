<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    function index()
    {
        return view("home");
    }
    function ritik()
    {
        return view("layouts/about");
    }
}
