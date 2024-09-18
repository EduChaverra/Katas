<?php

enum PlanesVacacionales: string {
    case RESTAURANTE = 'restaurante';
    case DEPORTE = 'deporte';
    case CULTURAL = 'cultural';
    case VISITA = 'visita';
}

class PlanVacacional{
    protected $lugar;
    protected $fecha;
    protected $nombre;
    protected $planVacacional;

    public function __construct(string $lugar, string $fecha, string $nombre, PlanesVacacionales $planVacacional = null)
    {
        $this->lugar= $lugar;
        $this->fecha = $fecha;
        $this->nombre= $nombre;
        $this->planVacacional = $planVacacional;
        
    }

    public function getLugar(){
        return $this->lugar;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPlanVacacional(){
        return $this->planVacacional;
    }
    public function realizar() {
        echo "Realizado: " . $this->nombre . "<br>";
    }
    public function anular() {
        echo "Plan " . $this->nombre . " ha sido anulado.<br>";
    }

}


?>