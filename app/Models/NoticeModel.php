<?php namespace App\Models;

use CodeIgniter\Model;
class NoticeModel extends Model{
     protected $table = 'tbl_notice';

     protected $allowedFields = ['title', 'notice'];
}