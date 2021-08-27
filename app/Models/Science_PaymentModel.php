<?php

namespace App\Models;

use CodeIgniter\Model;
class Science_PaymentModel extends Model{
    protected $table = 'tbl_sciencepayment';

    protected $allowedFields = ['st_id', 'month', 'payable', 'pay', 'due', 'paid'];
    protected $primaryKey = 'id';
}