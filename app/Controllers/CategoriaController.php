<?php


namespace App\Controllers;

use App\Models\CategoriaModel;
//use CodeIgniter\RESTful\ResourceController;

class CategoriaController extends MiRestApi
{
    protected $modelName ='App\models\CategoriaModel';
    protected $format = 'json';
    public function index()
    {
        return $this->GenericResponse($this->model->MostrarCategoria(),null,200);
    }

    public function show($id=null)
    {
        if ($this->model->MostrarCategoria($id)==null){
            return $this->GenericResponse(null,array('CategoriaProducto'=>'Categoria no Encontrada'),500);
        }

        return $this->GenericResponse($this->model->MostrarCategoria($id),null,200);
    }

    public function create()
    {
        $categoria=new CategoriaModel();

        if ($this->validate('categoriaAdmin')){
            $idcategoria=$categoria->insert([
                'nombreCategoriaProducto'=>$this->request->getPost('nombreCategoriaProducto'),
                'descripcionCategoriaProducto'=>$this->request->getPost('descripcionCategoriaProducto')
            ]);

            return $this->GenericResponse($this->model->MostrarCategoria($idcategoria),null,200);
        }

        //  Errores

        $validacion = \config\Services::validation();
        return $this->GenericResponse(null,$validacion->getErrors(),500);

    }

    public function delete($id=null)
    {
        $categoria=new CategoriaModel();

        $categoria->delete($id);

        return $this->GenericResponse('Categoria eliminada Correctamente',null,200);

    }

}