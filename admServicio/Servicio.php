<?php

class Servicio
{
    private $idServicio;
    private $nombre;
    private $apellido;
    private $descripcion;

    
     function __construct($idServicio, $nombre, $descripcion) {
       $this->idServicio = $idServicio;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
     }
    
     function setIdServicio($idServicio){
       $this->idServicio = $idServicio;
     } 
     function getIdServicio(){
       return $this->idServicio;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
     
}

?> 
