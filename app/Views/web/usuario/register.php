<?= $this->extend('Layouts/web') ?>

<?= $this->Section('contenido') ?>

<?= view('partials/_from-error') ?>

<form action="<?= route_to('usuario.register_post') ?>" method="post">

    <label for="usuario">Usuario</label>
    <input type="test" name="usuario" id="usuario">

    <label for="email">Email</label>
    <input type="test" name="email" id="email">

    <label for="contrasena">Contrasena</label>
    <input type="password" name="contrasena" id="contrasena">

    <input type="submit" value="Enviar">

</form>

<?= $this->endSection() ?>