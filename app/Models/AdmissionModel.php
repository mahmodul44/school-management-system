<?php namespace App\Models;

use CodeIgniter\Model;

class AdmissionModel extends Model
{
     protected $table = 'tbl_admission';

     protected $allowedFields = ['Name','fName','mName', 'sName','Section','Payment', 'Phone', 'uName','Thana','District','Village','Gender','birthDate','photo','admissionDate'];
      // protected $primaryKey = 'id';
}