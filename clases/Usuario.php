<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author andres
 */
class Usuario {
    //put your code here
    
    private $nomusuario;
    private $nombre;
    private $clave;
    private $nomarchivo;
    private $archivo;
    private $id;
    
    function __construct($nomusuario, $nombre, $clave, $nomarchivo, $archivo, $id) {
        $this->nomusuario = $nomusuario;
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->nomarchivo = $nomarchivo;
        $this->archivo = $archivo;
        $this->id = $id;
    }
    
    function getNomusuario() {
        return $this->nomusuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getClave() {
        return $this->clave;
    }

    function getNomarchivo() {
        return $this->nomarchivo;
    }

    function getArchivo() {
        return $this->archivo;
    }

    function getId() {
        return $this->id;
    }

    function setNomusuario($nomusuario) {
        $this->nomusuario = $nomusuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNomarchivo($nomarchivo) {
        $this->nomarchivo = $nomarchivo;
    }

    function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function Valida(){
        /*  verificar existencia */
        $db = new DBconnnection();
        $dblink = $db->conexion();
        
        if(!isset($dblink)){
            return false;
        }
        
        $PDOst = $dblink->prepare('select id,nombre
                                    from usuario
                                    where nomusu=? and clave=?');
        
        $PDOst->execute(array($this->nomarchivo, $this->clave));
        
        $row = $PDOst->fetch(PDO::FETCH_OBJ);
        
        if(isset($row)){
            $this->nombre = $row->nombre;
            return true;
        }else{
            return false;
        }
    }

}
