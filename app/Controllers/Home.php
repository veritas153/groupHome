<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('page/home');
    }

    public function phpinfo()
    {
        return view('phpinfo');
    }

}
