<?= $this->extend('Layouts/dashboard') ?>
<?= $this->Section('contenido') ?>
<form action="/dashboard/categoria/update/<?= $categoria['id'] ?>" method="post">
        <?= view('dashboard/categoria/_form', ['op' => 'Actualizar'])?>
    </form>
<?= $this->endSection() ?>
