<?php

include ("../lib/contantes");
include ("../lib/db.php");
include ("../clases/Usuario.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$oUsr = new Usuario($nomusuario, "", $clave);

if($oUsr->Valida()){
    echo "Guena GUena".$oUser->getNombre();
}else{
    echo 'Error, terrible de pollo';
}