<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // We want to check in case the user isn't logged in then redirect to login page
        if (! session()->get('isLoggedIn')){
            // if (session()->get('role') == "Administrator"){
            //     return redirect()->to('/dashboard');
            // } else {
                return redirect()->to(base_url());
            // }
            
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}