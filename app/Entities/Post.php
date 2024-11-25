<?php

namespace App\Controllers;

// use CodeIgniter\Entity\Entity;
use CodeIgniter\RESTful\ResourceController;

class Post extends ResourceController
{
    // protected $datamap = [];
    // protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    // protected $casts   = [];
    protected $modelName = 'App\Models\PostModel';
    protected $format = 'json';

    public function index(){
        return $this->respond($this->model->findAll());
    }
    public function show($id = null){
        $record = $this->model->find($id);
        if (!$record) {
            # code...
            return $this->failNotFound(sprintf(
                'post with id %d not found',
                $id
            ));
        }

        return $this->respond($record);
    }
}
