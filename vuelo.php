<?php 

class Vuelo {

    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $hrArribo;
    private $hrPartida;
    private $asientosTotales;
    private $asientosDisponibles;
    private $objResponsableVuelo;

    #Metodo constructor.

    public function __construct($pNumero, $pImporte, $pFecha, $pDestino, $pHrArribo, $pHrPartida, $pAsientosTotales, $pAsientosDisponibles, $pObjResponsableVuelo){
        $this->numero = $pNumero;
        $this->importe = $pImporte;
        $this->fecha = $pFecha;
        $this->destino = $pDestino;
        $this->hrArribo = $pHrArribo;
        $this->hrPartida = $pHrPartida;
        $this->asientosTotales = $pAsientosTotales;
        $this->asientosDisponibles = $pAsientosDisponibles;
        $this->objResponsableVuelo = $pObjResponsableVuelo;
    }

    #Setters.

    public function setNumero($pNumero){
        $this->$numero = $pNumero;
    }

    public function setImporte($pImporte){
        $this->importe = $pImporte;
    }

    public function set($pFecha){
        $this->fecha = $pFecha;
    }

    public function setDestino($pDestino){
        $this->destino = $pDestino;
    }

    public function setHrArribo($pHrArribo){
        $this->hrArribo = $pHrArribo;
    }

    public function setHrPartida($pHrPartida){
        $this->hrPartida = $pHrPartida;
    }

    public function setAsientosTotales($pAsientosTotales){
        $this->asientosTotales = $pAsientosTotales;
    }

    public function setAsientosDisponibles($pAsientosDisponibles){
        $this->asientosDisponibles = $pAsientosDisponibles;
    }

    public function setObjResponsableVuelo($pObjResponsableVuelo){
        $this->objResponsableVuelo = $pObjResponsableVuelo;
    }


    #Getters.
    
    public function getNumero(){
        return $this->$numero;
    }

    public function getImporte(){
        return $this->importe;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function getHrArribo(){
        return $this->hrArribo;
    }

    public function getHrPartida(){
        return $this->hrPartida;
    }

    public function getAsientosTotales(){
        return $this->asientosTotales;
    }

    public function getAsientosDisponibles(){
        return $this->asientosDisponibles;
    }

    public function getObjResponsable(){
        return $this->objResponsableVuelo;
    }

    public function asignarAsientosDisponibles($cantPasajeros){
        $puedenAsignarse = false;
        $asientosDisponibles = $this->getAsientosDisponibles();
        if ($cantPasajeros <= $asientosDisponibles){
            $asientosDisponibles = $asientosDisponibles - $cantPasajeros;
            $this->setAsientosDisponibles($asientosDisponibles);
            $puedenAsignarse = true;
        }
        return $puedenAignarse;
    }

    public function __toString(){
    }
}
    ?>