<?php

namespace App\Models;

use CodeIgniter\Model;

class AttendenceModel extends Model
{

     protected $table = 'tbl_atnfive';

     protected $allowedFields = ['id_no', 'attend','atn_date'];
}