<?php

class Receta
{
    private $idReceta;
    private $idPlato;
    private $nombre;
    private $descripcion;
    
     function __construct($idReceta, $idPlato, $nombre, $descripcion) {
       $this->idReceta = $idReceta;
       $this->idPlato = $idPlato;
       $this->nombre = $nombre;
       $this->idUsuario = $descripcion;
     }
    
     function setIdReceta($idReceta){
       $this->idReceta = $idReceta;
     } 
     function getIdReceta(){
       return $this->idReceta;
     }
     function setIdPlato($idPlato){
       $this->idPlato = $idPlato;
     } 
     function getIdPlato(){
       return $this->idPlato;
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
