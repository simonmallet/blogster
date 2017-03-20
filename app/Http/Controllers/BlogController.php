<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function displayHome()
    {
        return view('home', ['blogTitle' => 'Blogster']);
    }
}