<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherIDModel extends Model
{
     protected $table = 'tbl_teacherid';

     protected $allowedFields = ['title','t_name', 'ocupation', 'mobile', 'photo'];

    
     // protected $primaryKey = 'id';
}