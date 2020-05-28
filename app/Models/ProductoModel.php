<?php

namespace App\Models;

use CodeIgniter\Model;


class ProductoModel extends Model
{

    protected $table = 'producto';
    protected $primaryKey = 'idProducto';
    protected $allowedFields =['idProducto','nombreProducto','caracteristicasProducto','PlataformaProducto','CategoriaProducto','urlimagenProducto'];

    public function MostrarProducto($id=null)
    {
        if ($id===null){
            return $this->from('ProductoVista')->findAll();
        }
//        return $this->asObject()
//            ->select('Producto.idProducto as CodigoProducto')

    }
}