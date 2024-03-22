<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'organization', 'designation', 'email', 'mobile','urn_no','password'];
    
}

