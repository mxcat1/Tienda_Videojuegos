<?php


namespace App\Models;


use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table ='categoriaproducto';
    protected $primaryKey ='idCategoriaProducto';
    protected $allowedFields =['idCategoriaProducto','nombreCategoriaProducto','descripcionCategoriaProducto'];

    public function MostrarCategoria($id = null)
    {
        if ($id===null){
            return $this->setTable('categoriavista')->get()->getResultObject();
        }
        return $this->setTable('categoriavista')->where('Codigo',$id)->first();
    }
}