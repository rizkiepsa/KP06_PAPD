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

    public function tampil()
    {
        $data['title'] = 'Data Form';
        return view('user/tampil', $data);
    }

    public function tampil2()
    {
        $data['title'] = 'Data Form 2';
        return view('user/tampil2', $data);
    }

    public function tampilForm2()
    {
        $data['title'] = 'Data Form 2';
        return view('user/tampilForm2', $data);
    }

    public function tampilForm3()
    {
        $data['title'] = 'Data Form 3';
        return view('user/tampilForm3', $data);
    }
}
