<?php 
include_once("clasUsuario.php");
if( isset($_POST['documento']) && $_POST['nombre'] && $_POST['fec_nacimiento'] && $_POST['contrasena'] ){
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fec_nacimiento'];
    $contrasena = $_POST['contrasena'];
    if(usuario::retornarDato(5,$documento) > "0"){
        usuario::actualizarUsuarios($documento,$nombre,$fecha,$contrasena);
        header("location:v_consultar.php");
    }else{
        if( usuario::registrarUsuario($documento,$nombre,$fecha,$contrasena) == 1 ){
            header("location:v_consultar.php");
        }else{
            echo "Erro al registrar al usuario";
        }
    }
    
}else{
    echo "Ingresa los datos antes";
}