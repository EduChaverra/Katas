<?php

require_once 'clases/PlanVacacional.php';
require_once 'clases/Entregas.php';
require_once 'clases/Planificador.php';

$planificador = new Planificador();

$plan1 = new PlanVacacional('Barcelona', '2024-16-09', 'Visita al Parque Güell', PlanesVacacionales::VISITA);
$plan2 = new PlanVacacional('Madrid', '2024-17-09', 'Cena en Restaurante', PlanesVacacionales::RESTAURANTE);

$entrega1 = new Entregas('Entrega 1', Sprint::HTML_Y_PHP, '2024-18-09', 'https://github.com/user/repo1', 'Comentarios');
$entrega2 = new Entregas('Entrega 2', Sprint::LARAVEL_MVC, '2024-16-09', 'https://github.com/user/repo2', 'Comentarios');

try {
    $planificador->agregarPlan($plan1);
    $planificador->agregarPlan($plan2);
    $planificador->agregarEntrega($entrega1);
    $planificador->agregarEntrega($entrega2);
} catch (Exception $errorFecha) {
    echo $errorFecha->getMessage() . "<br>";
}

$planificador->realizarPlan('Visita al Parque Güell');
$planificador->anularPlan('Cena en Restaurante');
$planificador->entregarEntrega('Entrega 1');
$planificador->reentregarEntrega('Entrega 1');
$planificador->entregarEntrega('Entrega 2');

?>
