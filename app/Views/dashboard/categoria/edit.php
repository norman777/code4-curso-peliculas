<?= $this->extend('Layouts/dashboard') ?>

<?= $this->Section('contenido') ?>

<?= view('partials/_from-error') ?>

<form action="/dashboard/categoria/update/<?= $categoria['id'] ?>" method="post">
        <?= view('dashboard/categoria/_form', ['op' => 'Actualizar'])?>
    </form>
<?= $this->endSection() ?>
