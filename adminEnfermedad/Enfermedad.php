<?php

class Enfermedad
{
    private $idEnfermedad;
    private $nombre;
    

    
     function __construct($idEnfermedad, $nombre) {
       $this->idEnfermedad = $idEnfermedad;
       $this->nombre = $nombre;
       
     }
    
     function setIdEnfermedad($idEnfermedad){
       $this->idEnfermedad = $idEnfermedad;
     } 
     function getIdEnfermedad(){
       return $this->idEnfermedad;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
}

?> 
