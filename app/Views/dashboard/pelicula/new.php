<?= $this->extend('Layouts/dashboard') ?>

<?= $this->Section('contenido') ?>

<?= view('partials/_from-error') ?>

<form action="/dashboard/pelicula/create" method="post">
    <?= view('dashboard/pelicula/_form', ['op' => 'Crear']) ?>
</form>

<?= $this->endSection() ?>