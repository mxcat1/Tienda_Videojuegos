<?php

namespace App\Database\Seeds;

use Faker;

class ProductoSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $fakerdata= Faker\Factory::create('es-ES');

        $this->db->table('producto')->delete(['0'=>'0']);

        for ($i=0;$i<10;$i++){
            $data =[
                'idProducto' => $fakerdata->bothify('####????????'),
                'nombreProducto'=> $fakerdata->bothify('Producto Juego #?#'),
                'caracteristicasProducto'=>$fakerdata->bothify('????,?????,?????'),
                'PlataformaProducto'=>$fakerdata->numberBetween(1,4),
                'CategoriaProducto'=>$fakerdata->numberBetween(1,3),
                'urlimagenProducto'=>null
            ];

            $this->db->table('producto')->insert($data);
        }

    }

}