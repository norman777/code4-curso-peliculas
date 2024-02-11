<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class pelicula extends BaseController
{

    public function show($id)
    {
        // echo $id;
        $peliculaModel = new PeliculaModel();

        // var_dump($peliculaModel->find($id));

        echo view('dashboard/pelicula/show.php', [
            'pelicula' => ($peliculaModel->find($id))
        ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);
        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro gestionado de manera exitosa');
        //// var_dump($this->request->getPost('descripcion'));
    }

    public function new()
    {
        //return redirect()->route('test');
        echo view('dashboard/pelicula/new', [
            'pelicula' => [
                'titulo' => '',
                'descripcion' => ''
            ]
        ]);
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/edit', [
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function update($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        //return redirect()->back();
        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro gestionado de manera exitosa');
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        return redirect()->back()->with('mensaje', 'Registro gestionado de manera exitosa');
    }

    public function index()
    {

        $peliculaModel = new PeliculaModel();

        // ------- var_dump($peliculaModel->findAll()[1]['titulo']);

        /* ------- echo view('dashboard/index', [
            'nombreVariableVista' => 'contenido',
            'nombreVariableVista2' => 'contenido 2',
            'nombreVariableVista3' => 5,
            'miArray' => [1,2,3,4,5],
        ]); ------- */

        echo view('dashboard/pelicula/index', [
            'peliculas' => $peliculaModel->findAll(),

        ]);
    }
}
