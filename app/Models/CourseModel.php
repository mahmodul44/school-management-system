<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{

     protected $table = 'tbl_course';

     protected $allowedFields = ['classname', 'fee','photo','description','duration','t_student','class_time'];
}