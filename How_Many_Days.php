<?php

$fecha1 = '01/01/2023';
$fecha2 = '01/01/2024';

function calcularDiasEntreFechas($fecha1, $fecha2) {

    // Uso de expresión regular y validacion de fechas
    $formato_fecha = '/^\d{2}\/\d{2}\/\d{4}$/';

   
    if (!preg_match($formato_fecha, $fecha1)) {
        throw new Exception("La fecha 1 no tiene el formato 'DD/MM/YYYY'");
    }

    if (!preg_match($formato_fecha, $fecha2)) {
        throw new Exception("La fecha 2 no tiene el formato 'DD/MM/YYYY'");
    }

    
    $fecha1_dt = DateTime::createFromFormat('d/m/Y', $fecha1);
    $fecha2_dt = DateTime::createFromFormat('d/m/Y', $fecha2);
    
    $diferencia = $fecha1_dt->diff($fecha2_dt);
    
    $diferencia_en_dias = $diferencia->days;

    return $diferencia_en_dias;
        
}

echo 'La diferencia entre las fechas ' . $fecha1 . ' y ' . $fecha2 . ' es de ' . calcularDiasEntreFechas($fecha1,$fecha2) . ' dias';


?>