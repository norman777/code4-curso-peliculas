<?php

namespace App\Database\Seeds;

use App\Models\PeliculaModel;
use CodeIgniter\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->where('id >=',1)->delete();

        for ($i=0; $i < 20; $i++) { 
            $peliculaModel->insert(
                [
                    'titulo' => "Pelicula $i",
                    'descripcion' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione culpa quia asperiores fuga dicta placeat excepturi illo alias. Ipsa neque veritatis ipsum consectetur iusto accusantium deserunt minima ullam reiciendis?", 
                ]
            );
        }
    }
}
