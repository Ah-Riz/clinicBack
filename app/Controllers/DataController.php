<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class DataController extends ResourceController
{
    protected $modelName = "App\Models\DataControllerModel";
    protected $format = "json";

    public function __construct()
    {
        $this->model = new $this->modelName();
    }

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // public function show($id = null)
    // {
    //     $record = $this->model->find($id);
    //     if (!$record) {
    //         # code...
    //         return $this->failNotFound(sprintf(
    //             'post with id %d not found',
    //             $id
    //         ));
    //     }

    //     return $this->respond($record);
    // }
}