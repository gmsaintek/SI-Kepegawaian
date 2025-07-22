<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->to('/');
        }
        return view('dashboard', ['user' => $user]);
    }
}
