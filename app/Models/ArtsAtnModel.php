<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtsAtnModel extends Model
{

    protected $table = 'tbl_atnarts';

    protected $allowedFields = ['id_no', 'attend', 'atn_date'];
    protected $primaryKey = 'id';
}