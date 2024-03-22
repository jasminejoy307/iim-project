<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admins';
    protected $allowedFields = ['name','email','name','username','password','mobile'];
}
