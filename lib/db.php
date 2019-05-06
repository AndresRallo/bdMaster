<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DBconnnection{
    function conexion(){
        try {
            $dblink = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSR);
            $dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dblink->exec("set names utf8");
        } catch (Exception $ex) {
            echo 'Error en la mierda de conexion', $ex->getMessage(),"\n";
            return null;
        }
    }
}
