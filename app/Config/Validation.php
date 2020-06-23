<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	public $categoriaAdmin =[
        'nombreCategoriaProducto'=>'required|min_length[5]|max_length[100]|is_unique[categoriaproducto.nombreCategoriaProducto]',
        'descripcionCategoriaProducto'=>'required|min_length[5]|max_length[250]'
    ];

    public $categoriaAdmin_errors =[
        'nombreCategoriaProducto'=>[
            'required'=>'El campo del Nombre Categoria no debe estar vacio',
            'min_length'=>'El campo del Nombre Categoria debe tener mas de 5 caracteres',
            'max_length'=>'El campo del Nombre Categoria debe tener menos de 100 caracteres',
            'is_unique'=>'El campo del Nombre Categoria ya existe intente con otro'
        ],
        'descripcionCategoriaProducto'=>[
            'required'=>'El campo de la Descripcion Categoria no debe estar vacio',
            'min_length'=>'El campo de la Descripcion Categoria debe tener mas de 5 caracteres',
            'max_length'=>'El campo de la Descripcion Categoria debe tener menos de 250 caracteres',
        ]
    ];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
