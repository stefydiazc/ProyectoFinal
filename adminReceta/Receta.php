<?php

class Receta
{
    private $idReceta;
    private $nombre;
    private $descripcion;
    private $informacionnutricional;
    private $foto;
    
     function __construct($idReceta, $nombre, $descripcion, $informacionnutricional, $foto) {
       $this->idReceta = $idReceta;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
<<<<<<< HEAD
=======
       $this->informacionnutricional = $informacionnutricional;
       $this->foto = $foto;
>>>>>>> c2b5a91ef514293361774d09a4065c5ef5fe0537
     }
    
     function setIdReceta($idReceta){
       $this->idReceta = $idReceta;
     } 
     function getIdReceta(){
       return $this->idReceta;
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
     function setInformacionnutricional($informacionnutricional){
       $this->informacionnutricional = $informacionnutricional;
     } 
     function getInformacionnutricional(){
       return $this->informacionnutricional;
     }  
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     }  
}

?> 
