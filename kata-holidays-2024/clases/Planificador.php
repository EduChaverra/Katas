<?php

class Planificador {
    private $planes = [];
    private $entregas = [];

    public function agregarPlan(PlanVacacional $plan) {
        if ($this->fechaOcupada($plan->getFecha())) {
            throw new Exception("El día " . $plan->getFecha() . " ya está ocupado.<br>");
        }
        $this->planes[] = $plan;
        echo "Plan agregado.<br>";
    }

    public function agregarEntrega(Entregas $entrega) {
        if ($this->fechaOcupada($entrega->getFechaEntrega())) {
            throw new Exception("El día " . $entrega->getFechaEntrega() . " ya está ocupado.<br>");
        }
        $this->entregas[] = $entrega;
        echo "Entrega agregada.<br>";
    }

    //Funcion para recorrer los arrays de planes y entregas, buscando la fecha y devolviendo si es igual a la fehca introducida en el nuevo plan
    private function fechaOcupada($fecha) {
        foreach ($this->planes as $plan) {
            if ($plan->getFecha() === $fecha) {
                return true;
            }
        }
        foreach ($this->entregas as $entrega) {
            if ($entrega->getFechaEntrega() === $fecha) {
                return true;
            }
        }
        return false;
    }

    public function realizarPlan($nombre) {
        foreach ($this->planes as $plan) {
            if ($plan->getNombre() === $nombre) {
                $plan->realizar();
                return;
            }
        }
        echo "Plan no encontrado.<br>";
    }

    public function anularPlan($nombre) {
        foreach ($this->planes as $plan) {
            if ($plan->getNombre() === $nombre) {
                $plan->anular();
                return;
            }
        }
        echo "Plan no encontrado.<br>";
    }

    public function entregarEntrega($nombre) {
        foreach ($this->entregas as $entrega) {
            if ($entrega->getNombreEntrega() === $nombre) {
                $entrega->entregar();
                return;
            }
        }
        echo "Entrega no encontrada.<br>";
    }

    public function reentregarEntrega($nombre) {
        foreach ($this->entregas as $entrega) {
            if ($entrega->getNombreEntrega() === $nombre) {
                $entrega->reentregar();
                return;
            }
        }
        echo "Entrega no encontrada.<br>";
    }
}

?>