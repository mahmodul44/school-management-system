<?php

namespace App\Models;

use CodeIgniter\Model;

class ReciptModel extends Model
{

     protected $table = 'tbl_recipt';

     protected $allowedFields = ['reciptbook', 'st_name','st_id','st_class','st_mobile','month_one','type_one','amount_one','total_one','month_two','type_two','amount_two','total_two','month_three','type_three','amount_three','total_three','totals'];
}