<?php

class Tip
{
    private $idTip;
    private $nombre;
    private $descripcion;
    
    
    
     function __construct($idTip, $nombre, $descripcion ){
       $this->idTip = $idTip;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       
     }
    
     function setIdTip($idTip){
       $this->idTip = $idTip;
     } 
     function getIdTip(){
       return $this->idTip;
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