<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['username', 'password', 'status', 'role', 'foto'];
}
