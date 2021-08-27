<?php

namespace App\Models;

use CodeIgniter\Model;

class AdmitModel extends Model
{

     protected $table = 'tbl_admit';

     protected $allowedFields = ['serial_no', 'exm_name','roll','code_no','reg_no','code_ins_name','session','student_name','exm_type','fname','section','mname','dob','code_1','code_2','code_3','code_4','code_5','code_6'];
}