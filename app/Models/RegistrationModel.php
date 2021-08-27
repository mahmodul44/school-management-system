<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{

     protected $table = 'tbl_reg';

     protected $allowedFields = ['serial_no', 'reg_no', 'session', 'std_name', 'fname', 'mname', 'dob_words', 'dob', 'gender', 'jsc_roll', 'board', 'class', 'section', 'class_roll','groups','ins_code','ins_name','thana','district','exm_type','bn_1','bn_2','en_1','en_2','math','ict','code_1', 'code_2', 'code_3', 'code_4', 'code_5', 'code_6','code_7','code_ob','photo'];
}