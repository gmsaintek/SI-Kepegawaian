<?php
namespace App\Controllers;

use App\Models\UserModel;
use League\OAuth2\Client\Provider\Google;

class Auth extends BaseController
{
    private Google $provider;
    private UserModel $users;

    public function __construct()
    {
        $this->provider = new Google([
            'clientId'     => getenv('GOOGLE_CLIENT_ID'),
            'clientSecret' => getenv('GOOGLE_CLIENT_SECRET'),
            'redirectUri'  => base_url('auth/callback'),
        ]);
        $this->users = new UserModel();
    }

    public function index()
    {
        $authUrl = $this->provider->getAuthorizationUrl(['scope' => ['openid','email','profile']]);
        session()->set('oauth2state', $this->provider->getState());
        return view('auth/login', ['authUrl' => $authUrl]);
    }

    public function callback()
    {
        $state = $this->request->getGet('state');
        if (empty($state) || $state !== session()->get('oauth2state')) {
            session()->remove('oauth2state');
            return redirect()->to('/');
        }
        $token = $this->provider->getAccessToken('authorization_code', [
            'code' => $this->request->getGet('code'),
        ]);
        $googleUser = $this->provider->getResourceOwner($token);
        $data = [
            'google_id' => $googleUser->getId(),
            'email' => $googleUser->getEmail(),
            'name' => $googleUser->getName(),
        ];
        $user = $this->users->where('google_id', $data['google_id'])->first();
        if (!$user) {
            $data['role'] = 'employee';
            $data['created_at'] = date('Y-m-d H:i:s');
            $this->users->insert($data);
            $user = $this->users->where('google_id', $data['google_id'])->first();
        }
        session()->set('user', [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role'],
        ]);
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
