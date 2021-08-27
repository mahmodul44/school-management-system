<?php

namespace App\Models;

use CodeIgniter\Model;

class IDCardModel extends Model
{
     protected $table = 'tbl_idcard';

     protected $allowedFields = ['st_name', 'id_no', 'class', 'section', 'photo', 'mobile'];
     protected $primaryKey = 'id';
}