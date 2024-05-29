<?php session_start();
require 'config.php';
require '../functions.php';
//archivo index del admin

$conexion = conexion($bd_config);

comprobarSesion();

if(!$conexion){
    header ('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);


require '../view/admin_index.view.php';

?>