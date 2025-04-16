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
    public function ventaAutomatica($cant_asientos, $pFecha, $pDestino) {

        $coleccionAerolineas = $this->getColeccionAerolineas();
        $vuelosDisponibles = $coleccionAerolineas->getVuelosProgramados();
        $cant_vuelos = count($vuelosDisponibles);
        $i= 0;
        $vueloVendido = false;

        while (!$vueloVendido && $i < $cant_vuelos) {

            $vueloAEvaluar = $vuelosDisponibles[$i];
            $asientosDisponibles = $vueloAEvaluar->getAsientosDisponibles();
            $fecha = $vueloAEvaluar->getFecha();
            $destino = $vueloAEveluar->getDestino();

            if ($cant_asientos<=$asientosDisponibles && $pFecha == $fecha && $destino == $pDestino) { 
                $vueloAEvaluar->asignarAsientosDisponibles($cant_asientos);
            }
        }
    }

    public function promedioRecaudadoXAerolinea($aerolinea){
        $coleAerolineas = getColeccionAerolineas();
        $encontrada = false;
        $importe = 0;
        $cant = 0;
        $promedio = 0;

        while($i<$cantAerolineas && !$encontrada){
            $denomiacion = $coleAerolineas[$i]->getDenominacion;
            if ($denominacion == $aerolinea) {
                $encontrada=true;
                $vuelosAerolinea = aerolinea->getVuelosProgramados;
                foreach ($vuelosAerolonea as $vuelo){
                    $importe = $importe + $vuelo->getImporte(); 
                    $cant++;
                }
            }
        }
        $promedio = $importe / $cant;
        return $promedio;
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
