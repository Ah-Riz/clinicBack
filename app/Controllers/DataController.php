<?php

namespace App\Controllers;

use App\Models\DataModel;
use CodeIgniter\RESTful\ResourceController;

class DataController extends ResourceController
{
    protected $modelName = 'App\Models\DataModel';
    protected $format = 'json';

    public function create()
    {
        $data = $this->request->getPost(); // Get POST data

        if ($this->model->insert($data)) {
            return $this->respondCreated(['status' => 'success', 'data' => $data]);
        } else {
            return $this->failValidationErrors($this->model->errors());
        }
    }
}

