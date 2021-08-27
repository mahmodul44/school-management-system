<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{

     protected $table = 'tbl_gallery';

     protected $allowedFields = ['description', 'photo'];
}