<?php

$texto = "¿has debugado ya?";

function dibujarTexto($texto){
    
    $palabrasPorLinea = explode(' ', $texto); // Separar el texto teniendo en cuenta los epsacios vacios

    // Encontrar la palabra más larga
    $largoMax = 0;
    foreach ($palabrasPorLinea as $palabra) {
        if (strlen($palabra) > $largoMax) {
            $largoMax = strlen($palabra);
        }
    }

    $anchoDelMarco = $largoMax + 4; // Determina el ancho max
    
    echo str_repeat('#', $anchoDelMarco) . "<br>"; // Imprime la primera linea

    foreach ($palabrasPorLinea as $palabra) {
        $numEspaciosVacios = $largoMax - strlen($palabra);
        echo "# " . $palabra . str_repeat("&nbsp;", $numEspaciosVacios) . " #" . "<br>"; //Aqui si lo interpreta como espacio vacio :), problemas con el ¿ :(
    }

    /*foreach ($palabrasPorLinea as $palabra) {
        $espacio = '&nbsp;';
        $numEspaciosVacios = str_pad($palabra, $largoMax, $espacio);
        echo "# " . $numEspaciosVacios . " #" . "<br>";
    } */ //opcion con str_pad, no interpreta el espacio vacio como tal :(
    
    echo str_repeat('#', $anchoDelMarco) . "<br>"; // Imprime la ultima linea
}

dibujarTexto($texto);
?>