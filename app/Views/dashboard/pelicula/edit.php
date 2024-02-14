<?= $this->extend('Layouts/dashboard') ?>

<?= $this->Section('contenido') ?>

<?= view('partials/_from-error') ?>

<form action="/dashboard/pelicula/update/<?= $pelicula->id ?>" method="post">
    <?= view('dashboard/pelicula/_form', ['op' => 'Actualizar']) ?>
</form>

<?= $this->endSection() ?>