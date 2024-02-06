<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class categoria extends BaseController 
{
    public function show($id)
    {

        $categoriaModel = new CategoriaModel ();


        echo view('dashboard/categoria/show.php',[
            'categoria' => ($categoriaModel->find($id))
        ]);
    }

    public function create()
    {
        $categoriaModel = new CategoriaModel ();
        
        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo')
        ]);
        return redirect()->to('/dashboard/categoria');
    }

    public function new()
    {
        echo view('dashboard/categoria/new',[
            'categoria' => [
                'titulo' => ''
            ]
        ]);
    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function update($id)
    {
        $categoriaModel = new CategoriaModel();
        
        $categoriaModel->update($id,[
            'titulo' =>$this->request->getPost('titulo')
        ]);
        return redirect()->to('/dashboard/categoria');
        //return redirect()->back();
    }

    public function delete($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        return redirect()->back();
    }

    public function index()
    {

        $categoriaModel = new CategoriaModel();

        echo view('dashboard/categoria/index', [
            'categorias' => $categoriaModel->findAll(),
            
        ]);

    }
}
