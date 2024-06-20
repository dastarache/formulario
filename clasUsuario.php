<?php

class usuario
{
    public static function registrarUsuario($documento, $nombre, $fecha, $contrasena)
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'ejercicio');
        $salida = 0;
        $sql = "INSERT INTO tb_usuarios (documento, nombre, fec_nacimiento, contrasena) VALUES ('$documento', '$nombre', '$fecha', '$contrasena')";
        $consulta = $conexion->query($sql);
        if ($consulta) {
            $salida = 1;
        }
        return $salida;
    }

    public static function consultarUsuario()
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'ejercicio');
        $salida = 0;
        $sql = "SELECT * FROM tb_usuarios";
        $consulta = $conexion->query($sql);
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div style='background-color: orange;'>";
            $salida .= "<h3>" . $fila['documento'] . "</h3>";
            $salida .= "<h3>" . $fila['nombre'] . "<br>";
            $salida .= "<a href='registro.php?documento=" . $fila['documento'] . "'>actualizar</a>";
            $salida .= "</div>";

        }
        return $salida;
    }



    public static function retornarDato($des, $valor)
    {
        $salida = "";
        $conexion = mysqli_connect('localhost', 'root', '', 'ejercicio');
        if ($des == 0) {
            $campo = "documento";
            $tabla = "tb_usuarios";
            $busqueda = "documento";
        }
        if ($des == 1) {
            $campo = "nombre";
            $tabla = "tb_usuarios";
            $busqueda = "documento";
        }
        if ($des == 2) {
            $campo = "fec_nacimiento";
            $tabla = "tb_usuarios";
            $busqueda = "documento";
        }
        if ($des == 3) {
            $campo = "foto";
            $tabla = "tb_usuarios";
            $busqueda = "documento";
        }
        if ($des == 4) {
            $campo = "contrasena";
            $tabla = "tb_usuarios";
            $busqueda = "documento";
        }
        if ($des == 5) {
            $campo = "count(*)";
            $tabla = "tb_usuarios";
            $busqueda = "documento";
        }

        $sql = "select $campo  from $tabla where $busqueda = '$valor'";

        $consulta = $conexion->query($sql);
        while ($fila = $consulta->fetch_array()) {
            $salida .= $fila[0];
        }
        return $salida;
    }

    public static function actualizarUsuarios($documento, $nombre, $fecha, $contrasena)
    {
        $salida = "";
        $conexion = mysqli_connect('localhost', 'root', '', 'ejercicio');
        $sql = " update tb_usuarios set nombre = '$nombre',";
        $sql .= "fec_nacimiento = '$fecha',contrasena = '$contrasena' ";
        $sql .= "where documento = '$documento' ";
        $consulta = $conexion->query($sql);
    }

}

