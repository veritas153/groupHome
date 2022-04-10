<?php


namespace App\Controllers;


class Member extends BaseController
{

    public function __construct()
    {
        helper([]);
    }

    public function index()
    {
        return view('/page/home');
    }

    public function login()
    {
        return view('page/member/login');
    }

    public function signup()
    {

    }

}