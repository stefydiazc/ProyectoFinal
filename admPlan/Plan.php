<?php

class Plan
{
    private $idPlan;
    private $nombre;
    private $descripcion;
    private $idServicio;
    private $precio;

    
     function __construct($idPlan, $nombre, $descripcion, $idServicio, $precio) {
       $this->idPlan = $idPlan;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       $this->idServicio = $idServicio;
       $this->precio = $precio;
     }
    
     function setIdPlan($idPlan){
       $this->idPlan = $idPlan;
     } 
     function getIdPlan(){
       return $this->idPlan;
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
      function setIdServicio($idServicio){
       $this->idServicio = $idServicio;
     } 
     function getIdServicio(){
       return $this->idServicio;
     } 
      function setPrecio($precio){
       $this->precio = $precio;
     } 
     function getPrecio(){
       return $this->precio;
     } 
}

?> 
