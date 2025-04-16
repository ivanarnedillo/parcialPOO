<?php 

class Persona {

    private $nombre;
    private $apellido;
    private $direccion;
    private $email;
    private $telefono;

    #Metodo constructor.

    public function __construct($nombreIngresado, $apellidoIngresado, $direccionIngresado, $emailIngresado, $telefonoIngresado){
        $this->nombre = $nombreIngresado;
        $this->apellido = $apellidoIngresado;
        $this->direccion = $direccionIngresado;
        $this->email = $emailIngresado;
        $this->telefono = $telefonoIngresado;
    }

    #Setters.

    public function setNombre($nombreIngresado){
        $this->nombre = $nombreIngresado;
    }

    public function setApellido($apellidoIngresado){
        $this->apellido = $apellidoIngresado;
    }

    public function setDireccion($direccionIngresado){
        $this->direccion = $direccionIngresado;
    }

    public function setEmail($emailIngresado){
        $this->email = $emailIngresado;
    }

    public function setTelefono($telefonoIngresado){
        $this->telefono = $telefonoIngresado;
    }

    #Getters.
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function __toString(){
        return "Nombre y apellido: " . $this->getNombre() . " " . $this->getApellido() . ".\n " .
                "Direccion: " . $this->getDireccion() . ".\n " .
                "Email: " . $this->getEmail() . ".\n" .
                "Telefono: " . $this->getTelefono() . ".\n" .
                "------------------------------------------ \n";
    }
}
?>