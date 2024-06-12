<?php

namespace App\Controllers\Marketing;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Marketing'
        ];
        return view('marketing/home', $data);
    }
}
