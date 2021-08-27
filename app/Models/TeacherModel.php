<?php namespace App\Models; 
use CodeIgniter\Model;
class TeacherModel extends Model{

protected $table = 'tbl_teacher';

protected $allowedFields = ['t_name', 'ocupation', 'address','mobile', 'photo'];
}