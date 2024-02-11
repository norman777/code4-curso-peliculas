<?= $this->extend('Layouts/dashboard') ?>

<?= $this->Section('header') ?>
    Listado de categorias
<?= $this->endSection() ?>

<?= $this->Section('contenido') ?>

<a href="/dashboard/categoria/new">Crear</a>
<table>

    <tr>
        <th>
            Id
        </th>
        <th>
            Titulo
        </th>
        <th>
            Opsiones
        </th>
    </tr>

    <?php foreach ($categorias as $key => $p) : ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['titulo'] ?></td>
            <td>
                <a href="/dashboard/categoria/show/<?= $p['id'] ?>">Show</a>
                <a href="/dashboard/categoria/edit/<?= $p['id'] ?>">Edit</a>
                <form action="/dashboard/categoria/delete/<?= $p['id'] ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?= $this->endSection() ?>