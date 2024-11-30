<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Update with your actual table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'password', 'name']; // Update fields as needed
    protected $returnType = 'array';

    protected $useTimestamps = true; // Assumes you have `created_at` and `updated_at` fields in your table
}
