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

        //var_dump($peliculaModel->asArray()->find($id)->id);
        //var_dump($peliculaModel->asObject()->find($id)->id);


        echo view('dashboard/pelicula/show.php', [
            'pelicula' => ($peliculaModel->find($id))
        ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();

        if ($this->validate('peliculas')) {
            $peliculaModel->insert([
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion'),
            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }

        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro gestionado de manera exitosa');
        //// var_dump($this->request->getPost('descripcion'));
    }

    public function new()
    {
        //return redirect()->route('test');
        echo view('dashboard/pelicula/new', [
            'pelicula' => new PeliculaModel()
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

        if ($this->validate('peliculas')) {
            $peliculaModel->update($id, [
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion')
            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }

        //return redirect()->back();
        return redirect()->to('/dashboard/pelicula')->with('mensaje', 'Registro gestionado de manera exitosa');
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        return redirect()->back()->with('mensaje', 'Registro gestionado de manera exitosa');
    }

    public function index(){

        $peliculaModel = new PeliculaModel();

        //$db = \config\Database::connect();
        //$builder = $db->table('peliculas');

        //return $builder->limit(10, 20)->getCompiledSelect();

        echo view('dashboard/pelicula/index', [
            'peliculas' => $peliculaModel->findAll(),

        ]);
    }
}
