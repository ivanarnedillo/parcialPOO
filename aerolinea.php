<?php


class Aerolinea {

    private $identificacion;
    private $nombre;
    private $coleccionVuelosProgramados;


    public function __construct($pIdentificacion, $pNombre){
        $this->identificacion = $pIdentificacion;
        $this->nombre = $pNombre;
        $this->coleccionVuelosProgramados = [];
    }

    #Setters

    public function setIdentificacion($pIdentificacion){
        $this->identificacion = $pIdentificacion;
    }

    public function setNombre($pNombre){
        $this->nombre = $pNombre;
    }

    public function setVuelosProgramados($pVueloProgramado){
        $this->coleccionVuelosProgramados = $pVueloProgramado;
    }

    #Getters.

    public function getIdentificacion(){
        return $this->identificacion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getVuelosProgramados($pVuelosProgramados){
        return $this->coleccionVuelosProgramados;
    }

    public function darVueloAdestino($destino, $cant_asientos){
        
        $coleccionVuelosDisponibles = [];
        $vuelosProgramados = $this->getVuelosProgramados();

        foreach ($vuelosProgramadas as $unVuelo) {
            
            $destinoVuelo = $unVuelo->getDestino();
            $asientosDisponibles = $unVuelo->getAsientosDisponibles();

            if ($destino == $destinoVuelo && $cant_asientos <= $asientosDisponibles){
                array_push($coleccionVuelosDisponibles,$unVuelo);
            }

        }

        return $coleccionVuelosDisponibles;
    }

    public function incorporarVuelo($vuelo){
        
        $coleccionVuelosDisponibles = getVuelosProgramados();
        $cantVuelos = count ($coleccionVuelosDisponibles);
        $incorporado = false;

        while ($i<$cantVuelos && !$incorporado) {
            $destino = $coleccionVuelosDisponibles[$i]->getDestino();
            $horario = $coleccionVuelosDisponibles[$i]->getHrPartida();
            $fecha = $coleccionVuelosDisponibles[$i]->getFecha();
            $pDestino = $vuelo->getDestino();
            $pHrPatida = $vuelo->getPartida();
            $pFecha = $vuelo->getFecha();
            if ($destino == $pDestino && $horario == $pHorario && $fecha==$pFechas) {
                $incorporado = false;
            } else {
                $incorporado = true;
                $this->setVuelosProgramados($vuelo);
            }
        }
        return $incorporado;
    }

        public function venderVueloADestino($cant_asientos, $pDestino, $pFecha){

            $coleccionVuelosDisponibles = $this->getVuelosProgramados();
            $cantVuelos = count($coleccionVuelosDisponibles);
            $i = 0;
            $vuelo = null;


            do{
                $destino  = $coleccionVuelosDisponibles[$i]->getDestino();
                $fecha = $coleccionVuelosDisponibles[$i]->getFecha();
                $asientosDisponibles = $coleccionVuelosDisponibles[$i]->getAsientosDisponibles();
                if ($destino == $pDestino && $fecha == $pFecha && $cant_asientos <= $asientosDisponibles) {
                    $coleccionVuelosDisponibles[$i]->asignarAsientosDisponibles($cant_asientos);                    
                    $vuelo = $coleccionVuelosDisponibles[$i];
                } else {
                    $i++;
                }
            } while ($i<$cantVuelos && $vuelo == null);
            return $vuelo;
        }


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


