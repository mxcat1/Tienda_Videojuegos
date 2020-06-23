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

    public function StockProductos($EstadoProducto='Disponible',$StockMayorA=0){
//        return $this->db->callFunction('StockProductos',array('EstadoProducto'=>$EstadoProducto,'CantidadProducto'=>$StockMayorA));
        return $this->db->query("CALL StockProductos('{$EstadoProducto}',{$StockMayorA})")->getResultObject();
    }
}