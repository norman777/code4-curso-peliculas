<?= $this->extend('Layouts/dashboard') ?>
<?= $this->Section('contenido') ?>
<form action="/dashboard/categoria/create" method="post">
    <?= view('dashboard/categoria/_form', ['op' => 'Crear']) ?>
</form>

<?= $this->endSection() ?>