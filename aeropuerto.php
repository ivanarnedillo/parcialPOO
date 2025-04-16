<?php  

class Aeropuerto {
    
    private $denominacion;
    private $direccion;
    private $coleccionAerolineas;

    public function __construct($pDenominacion, $pDireccion, $pColeccionAerolineas){

    }

      #Setters

      public function setDenominacion($pDenominacion){
        $this->denominacion = $pDenominacion;
    }

    public function setDireccion($pDireccion){
        $this->direccion = $pDireccion;
    }

    public function setColeccionAerolineas($pAerolinea){
        $this->coleccionAerolineas[] = $pAerolinea;
    }

    #Getters.

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getColeccionAerolineas(){
        return $this->coleccionAerolineas;
    }

    public function retornarVuelosAerolinea($pAerolinea){

        $coleccionAerolineas = $this->getColeccionAerolineas();
        $vuelosAsignados = null;
        $pNombre = $pAerolinea->getNombre();

        foreach ($coleccionAerolineas as $aerolinea) {
            $nombreAerolinea = $aerolinea->getNombre();
            if ($nombreAerolinea == $pNombre){
                $vuelosAsignados = $aerolinea->getVuelosProgramados();
            }
        }

        return $vuelosAsignados;
    }

    public function __toString() {

        $cadenaAerolineas = "";
        $coleccionAerolineas = $this->getColeccionAerolineas();

        foreach ($coleccionAerolineas as $aerolinea) {
            $cadenaAerolineas .= $aerolinea . "\n";
        }

        return "Denominacion: " . $this->getDenominacion() . ". \n " .
               "Direccion " . $this->getDireccion() . ". \n " .
               "Aerolineas ". $cadenaAerolineas . ". \n " ;
    }

}