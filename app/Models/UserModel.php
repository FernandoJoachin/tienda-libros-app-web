<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected $allowedFields = [
        "userFirstName",
        "userLastName",
        "userEmail",
        "userPassword",
        "isAdmin"
    ];
}