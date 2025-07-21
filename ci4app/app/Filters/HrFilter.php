<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class HrFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $user = session('user');
        if (!$user || $user['role'] !== 'hr') {
            return redirect()->to('/dashboard');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
