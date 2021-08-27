<?php

namespace App\Models;

use CodeIgniter\Model;

class ScienceAtnModel extends Model
{

    protected $table = 'tbl_atnscience';

    protected $allowedFields = ['id_no', 'attend', 'atn_date'];
    protected $primaryKey = 'id';
}