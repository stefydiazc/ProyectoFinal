<?php

class Registrate
{
    private $id;
    private $apellido;
    
     function __construct($id, $email, $contrasena) {
       $this->id = $id;
       $this->email = $email;
       $this->contrasena = $contrasena;

     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setContrasena($contrasena){
       $this->contrasena = $contrasena;
     } 
     function getContrasena(){
       return $this->contrasena;
     } 
       
}

?> 
