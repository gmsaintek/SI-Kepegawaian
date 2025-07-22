<?php
namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    protected $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function index()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->to('/');
        }
        $dbUser = $this->users->find($user['id']);
        return view('profile/index', ['user' => $dbUser]);
    }

    public function update()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->to('/');
        }
        $this->users->update($user['id'], [
            'name' => $this->request->getPost('name'),
        ]);
        // update session
        $user['name'] = $this->request->getPost('name');
        session()->set('user', $user);
        session()->setFlashdata('success', 'Profil diperbarui.');
        return redirect()->to('/profile');
    }
}
