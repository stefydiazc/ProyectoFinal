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
       $this->informacionnutricional = $informacionnutricional;
       $this->foto = $foto;
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
