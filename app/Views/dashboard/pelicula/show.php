<?= $this->extend('Layouts/dashboard') ?>

<?= $this->Section('contenido') ?>

<h1><?= $pelicula['titulo'] ?></h1>
<p><?= $pelicula['descripcion'] ?></p>

<?= $this->endSection() ?>