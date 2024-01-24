<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class pelicula extends BaseController 
{
    public function show($id)
    {
        // echo $id;
        $peliculaModel = new PeliculaModel ();

        // var_dump($peliculaModel->find($id));

        echo view('pelicula/show.php',[
            'pelicula' => ($peliculaModel->find($id))
        ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel ();
        
        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);
        echo 'creado';
       //// var_dump($this->request->getPost('descripcion'));
    }

    public function new()
    {
        echo view('pelicula/new',[
            'pelicula' => [
                'titulo' => '',
                'descripcion' => ''
            ]
        ]);
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('pelicula/edit',[
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function update($id)
    {
        $peliculaModel = new PeliculaModel();
        
        $peliculaModel->update($id,[
            'titulo' =>$this->request->getPost('titulo'),
            'descripcion' =>$this->request->getPost('descripcion')
        ]);
        echo 'update';
    }

    public function delete($id){
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        echo "delete";
    }

    public function index()
    {

        $peliculaModel = new PeliculaModel();

        // ------- var_dump($peliculaModel->findAll()[1]['titulo']);

        /* ------- echo view('index', [
            'nombreVariableVista' => 'contenido',
            'nombreVariableVista2' => 'contenido 2',
            'nombreVariableVista3' => 5,
            'miArray' => [1,2,3,4,5],
        ]); ------- */

        echo view('pelicula/index', [
            'peliculas' => $peliculaModel->findAll(),
            
        ]);

    }
}
