<?php

class Objetivo
{
    private $idObjetivo;
    private $nombre;
    

    
     function __construct($idObjetivo, $nombre) {
       $this->idObjetivo = $idObjetivo;
       $this->nombre = $nombre;
       
     }
    
     function setIdObjetivo($idObjetivo){
       $this->idObjetivo = $idObjetivo;
     } 
     function getIdObjetivo(){
       return $this->idObjetivo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
}

?> 
