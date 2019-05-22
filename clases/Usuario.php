<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Fabian Saldaño
 */
class Usuario {
    
    private $rut;
    private $digito;
    private $nombre;
    private $clave;
    private $cod_rol;
    
    function __construct($rut, $digito, $nombre, $clave, $cod_rol) {
        $this->rut = $rut;
        $this->digito = $digito;
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->cod_rol = $cod_rol;
    }

    function getRut() {
        return $this->rut;
    }

    function getDigito() {
        return $this->digito;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getClave() {
        return $this->clave;
    }

    function getCod_rol() {
        return $this->cod_rol;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setDigito($digito) {
        $this->digito = $digito;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setCod_rol($cod_rol) {
        $this->cod_rol = $cod_rol;
    }

        function Valida(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('select rut,digito,nombre,clave,roles_cod_rol
                                 from usuario
                                 where nombre=? and clave=?');
        
        $PDOst->execute(array($this->nombre,$this->clave));

        if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            $this->rut=$row->rut;
            $this->digito=$row->digito;
            $this->nombre=$row->nombre;
            $this->clave=$row->clave;
            $this->cod_rol=$row->roles_cod_rol;            
            return true;
        }
        else{
             return false;   
        }
        
    }
}
