<?php

$a = "(3 + 4) * 2";
$b = "(5 + 3) * (3 - 1)";
$c = "(5 + 3 * (3 - 1)";

$operaciones = [$a, $b, $c];

function VerificarParentesis($operacion) {
    $array_de_parentesis = [];

    $longitud = strlen($operacion);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $operacion[$i];
        if ($caracter == '(') {
            array_push($array_de_parentesis, $caracter);
        } else if ($caracter == ')') {
            if (empty($array_de_parentesis)) {
                return "Incorrecto";
            }
            array_pop($array_de_parentesis);
        }
    }

    return empty($array_de_parentesis) ? "Correcto" : "Incorrecto";
}

foreach ($operaciones as $operacion) {
    $resultado = VerificarParentesis($operacion);
    echo $resultado . "<br>";
}

?>