<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MarketingFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('pesan', 'Silahkan Login terlebih dahulu');
            return redirect()->to('/');
        }

        if (session()->get('role_id') != 'Marketing') {
            session()->setFlashdata('pesan', 'Silahkan Login terlebih dahulu');
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
