<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'your_table_name'; // Replace with your table name
    protected $primaryKey = 'id'; // Replace with your primary key
    protected $allowedFields = ['field1', 'field2']; // Replace with your fields
}

