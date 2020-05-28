<?php


namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class CategoriaController extends ResourceController
{
    protected $modelName ='App\models\CategoriaModel';
    protected $format = 'json';
    public function index()
    {
        return $this->respond($this->model->MostrarCategoria());
    }

    public function show($id=null)
    {
        return $this->respond($this->model->MostrarCategoria($id));
    }
}