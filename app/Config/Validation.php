<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------


    public $categorias = [
        'titulo' => 'required|min_length[3]|max_length[255]'
    ];
    public $peliculas = [
        'titulo' => 'required|min_length[3]|max_length[255]',
        'descripcion' => 'required|min_length[3]|max_length[2000]',
        'categoria_id' => 'required|is_natural',
    ];
    
    public $etiquetas = [
        'titulo' => 'required|min_length[3]|max_length[255]',
        'categoria_id' => 'required|is_natural',
    ];

    public $usuarios = [
        'usuario' => 'required|min_length[3]|max_length[20]|is_unique[usuarios.usuario]',
        'email' => 'required|min_length[3]|max_length[70]|is_unique[usuarios.email]',
        'contrasena' => 'required|min_length[5]|max_length[15]',
    ];
}
