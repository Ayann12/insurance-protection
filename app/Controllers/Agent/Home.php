<?php

namespace App\Controllers\Agent;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('agent/home', $data);
    }
}
