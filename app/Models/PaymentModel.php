<?php namespace App\Models;
use CodeIgniter\Model;
class PaymentModel extends Model{
     protected $table = 'tbl_payment';

     protected $allowedFields = ['st_name', 'payment_method', 'mobile', 'trxID'];
     // protected $primaryKey = 'id';
}