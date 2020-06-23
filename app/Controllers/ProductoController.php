<?php


namespace App\Controllers;

use App\Models\ProductoModel;


class ProductoController extends MiRestApi
{
    protected $modelName='\App\models\ProductoModel';
    protected $format='json';

    public function index()
    {
        return "hola";
    }
    public function StockProductosDisponible(){
        return $this->GenericResponse($this->model->StockProductos(),null,200);
    }
}