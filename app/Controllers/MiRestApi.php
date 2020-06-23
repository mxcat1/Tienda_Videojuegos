<?php


namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class MiRestApi extends ResourceController
{
    public function GenericResponse($data, $errores, $codigo)
    {
        if ($codigo==200){
            return $this->respond(array(
                'data'=>$data,
                'codigo'=>$codigo
            ));
        }else{
            return $this->respond(array(
                'errores'=>$errores,
                'codigo'=>$codigo
            ));
        }
    }

}