<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function viewHome()
    {
        return view('public/home');
    }
}