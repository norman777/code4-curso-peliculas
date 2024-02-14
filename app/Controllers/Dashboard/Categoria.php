<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class categoria extends BaseController
{
    public function show($id){

        session()->set('key', 'value');

        $categoriaModel = new CategoriaModel();
        echo view('dashboard/categoria/show.php', [
            'categoria' => ($categoriaModel->find($id))
        ]);
    }

    public function new(){

        //var_dump(session()->destroy('key'));

        echo view('dashboard/categoria/new', [
            'categoria' => new CategoriaModel()
        ]);
    }

    public function create(){

        $categoriaModel = new CategoriaModel();

        if ($this->validate('categorias')) {
            $categoriaModel->insert([
                'titulo' => $this->request->getPost('titulo')
            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }
        return redirect()->to('/dashboard/categoria')->with('mensaje', 'Registro gestionado de manera exitosa');
    }

    public function edit($id){
        $categoriaModel = new CategoriaModel();
        echo view('dashboard/categoria/edit', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function update($id){

        $categoriaModel = new CategoriaModel();

        if ($this->validate('categorias')) {
            $categoriaModel->update($id, [
                'titulo' => $this->request->getPost('titulo')
            ]);
        } else {
            session()->setFlashdata([
                'validation' => $this->validator
            ]);

            return redirect()->back()->withInput();
        }
        //return redirect()->to('/dashboard/categoria');
        return redirect()->back()->with('mensaje', 'Registro gestionado de manera exitosa');
    }

    public function delete($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        session()->setFlashdata('mensaje', 'Registro eliminado de manera exitosa');
        return redirect()->back();
    }

    public function index(){

        //session()->set('key', array('k','c'));

        $categoriaModel = new CategoriaModel();
        echo view('dashboard/categoria/index', [
            'categorias' => $categoriaModel->findAll(),
        ]);
    }
}
