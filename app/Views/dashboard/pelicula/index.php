<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peliculas</title>
</head>

<body>
    <h1> Listado Peliculas </h1>

    <a href="/dashboard/pelicula/new">Crear</a>
    <table>

        <tr>
            <th>
                Id
            </th>
            <th>
                Titulo
            </th>
            <th>
                descripcion
            </th>
            <th>
                Opsiones
            </th>
        </tr>

        <?php foreach ($peliculas as $key => $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titulo'] ?></td>
                <td><?= $p['descripcion'] ?></td>
                <td>
                    <a href="/dashboard/pelicula/show/<?= $p['id'] ?>">Show</a>
                    <a href="/dashboard/pelicula/edit/<?= $p['id'] ?>">Edit</a>
                    <form action="/dashboard/pelicula/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>