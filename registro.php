<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio de sesión</title>
</head>

<body>
    <?php
    include ("clasUsuario.php")
        ?>

    <form action="conexion.php" method="post">
        <label for="">Documento</label>
        <input type="number" value="<?php if (isset($_GET['documento'])) {
            echo usuario::retornarDato(0, $_GET['documento']);
        } ?>" name="documento">

        <label for="">Nombre</label>
        <input type="text" value="<?php if (isset($_GET['documento'])) {
            echo usuario::retornarDato(1, $_GET['documento']);
        } ?>" name="nombre">

        <label for="">contrasena</label>
        <input type="password" value="<?php if (isset($_GET['documento'])) {
            echo usuario::retornarDato(4, $_GET['documento']);
        } ?>" name="contrasena">

        <label for="">Fecha nacimiento</label>
        <input type="text" value="<?php if (isset($_GET['documento'])) {
            echo usuario::retornarDato(2, $_GET['documento']);
        } ?>" name="fec_nacimiento">
        <input type="submit">
    </form>

</body>

</html>