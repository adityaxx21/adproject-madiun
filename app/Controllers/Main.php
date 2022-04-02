<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function main()
    {
        return view('main');
    }
}
