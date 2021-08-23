<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'User Profile';
        return view('user/index', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit User Profile';
        return view('user/edit', $data);
    }

    public function form1()
    {
        $data['title'] = 'Form 1';
        return view('user/form1', $data);
    }

    public function form2()
    {
        $data['title'] = 'Form 2';
        return view('user/form2', $data);
    }

    public function form3()
    {
        $data['title'] = 'Form 3';
        return view('user/form3', $data);
    }
}
