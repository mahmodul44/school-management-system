<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
     protected $table = 'tbl_admin';

     protected $allowedFields = ['name','user', 'email', 'password', 'photo','level'];
}