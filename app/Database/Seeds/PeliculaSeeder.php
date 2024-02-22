<?php

namespace App\Database\Seeds;

use App\Models\CategoriaModel;
use App\Models\PeliculaModel;
use CodeIgniter\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        $peliculaModel = new PeliculaModel();
        $categoriaModel = new CategoriaModel();

        $categorias = $categoriaModel->limit(7)->findAll();

        $peliculaModel->where('id >=', 1)->delete();
        foreach ($categorias as $c) {
            for ($i = 0; $i < 20; $i++) {
                $peliculaModel->insert(
                    [
                        'titulo' => "Pelicula $i",
                        'categoria_id' => $c->id,
                        'descripcion' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione culpa quia asperiores fuga dicta placeat excepturi illo alias. Ipsa neque veritatis ipsum consectetur iusto accusantium deserunt minima ullam reiciendis?",
                    ]
                );
            }
        }
    }
}
